<?php
namespace Controls\Pbbcontrol;
use Pbb\CorePbb;
use PbbHelpers\ScssToCss;
use PbbOther\Helpers\TempHandler;

class ControlBase{
    private $arr__=[];
    private $appendhead="";
    private $appendbody="";
    private $classname;
    private $funname;
    private $file;
    private $cachepath;
    protected $lang;
    private function cache_start_($time)
    {
        $cachepath = PATH_CACHE . str_replace('/', '_', $this->classname . '-' . $this->funname).$this->lang;
        if ($time == 0) $time = CACHE_TIME;
        else if ($time < 0) $time = 0xfffffff;
        if ($time != 0)
            $index = (time() / $time) % 2;
        else $index = '';
        if(strlen($_SERVER['QUERY_STRING'])>8) {
            $this->cachepath = $cachepath . $index . '-' . substr(md5($_SERVER['QUERY_STRING']), 0, 8);
        }else{
            $this->cachepath = $cachepath . $index . '-' . $_SERVER['QUERY_STRING'];
        }
        $ok=false;
        if (file_exists($this->cachepath)) {
            if (time() - filemtime($this->cachepath) < $time) {
                $ok=true;
            }
        }
        $file = fopen($this->cachepath, 'a+');
        $opera=$ok?LOCK_SH:LOCK_EX;
        if (flock($file, $opera | LOCK_NB)) {
            if($ok){
                fseek($file,0,SEEK_END);
                $len=ftell($file);
                fseek($file,0,SEEK_SET);
                if($len>0)
                call_user_func_array('_include',[fread($file,$len),$this]);
                else{
                    echo("请清除缓冲文件!");
                }
                flock($file,LOCK_UN);
                fclose($file);
                return false;
            }
            $this->file = $file;
        } else {
            fclose($file);
            $mes=file_get_contents($cachepath . strval(($index + 1) % 2));
            if($mes)
            call_user_func_array('_include',[$mes,$this]);
            else {CorePbb::Error("Busy!",false);}
            return false;
        }
        return true;
    }
    protected final function displayStatic($viewname){
        $path = PATH_STATIC . ($viewname ? $viewname : $this->classname);
        if(strpos($path,'.')===false) $path .= '.php';
        if(file_exists($path)){
            call_user_func_array('_include',[file_get_contents($path)]);
        }
        else{
            CorePbb::Error("该文件" . $path . "不存在!");
        }
    }
    private final function _displayStr($str,$path)
    {
        $naspace = dirname($this->classname);
        if ($naspace == '.' || $naspace == './' || $naspace == '/') $naspace = '';
        if (VIEWCOM_OPEN) {
            $tmp = new TempHandler($str, $this, $path);
            $html = $tmp->html();
            $html = str_replace(['__FILE__', '__DIR__', '__CLASS__', '__NAMESPACE__'], ['"' . $path . '"', '"' . dirname($path) . '"', '"' . $this->classname . '"', '"' . $naspace . '"'], $html);
            $html = str_replace(['__METHOD__'], '"' . $this->funname . '"', $html);
            if (LANG_SWITCH) $html =CorePbb::Language($html,$this->lang);
            ob_start();
            call_user_func_array('_include', [$html, $this]);
            $str = ob_get_contents();
            ob_end_clean();
        } else {
            $str = file_get_contents($path);
        }
        if (SCSSTAG_OPEN) {
            $style = [];
            $str = preg_replace_callback('/<style[^<>]*>(.*?)<\/style>/s', function ($match) use (&$style) {
                $mes = trim($match[1]);
                if (!in_array($mes, $style)) {
                    $style[] = $mes;
                }
            }, $str);
            if (count($style) > 0) {
                $stylemes = implode('', $style);
                $md5 = substr(md5($stylemes), 0, 8);
                $tmppath = PATH_PUBLIC . 'tmp/scss/' . $md5 . '.css';
                if (DEBUG||!file_exists($tmppath)) {
                    ScssToCss::BeginStr($stylemes,$tmppath, $tmppath,$this);
                }
                if (DEBUG) {
                    $stylemes = file_get_contents($tmppath);
                    $this->appendHead(NEWLINE.'<style>' . $stylemes . '</style>'.NEWLINE);
                } else {
                    $css = '//' . WEB_NAME . '/tmp/scss/' . $md5 . '.css?';
                    $this->appendHead('<link rel="stylesheet" href="' . $css . '"/>');
                }
            }
        }
        if ($this->appendhead != '') {
            $str1 = str_replace('</head>', $this->appendhead . '</head>', $str);
            if ($str1 == $str) $str = $this->appendhead . $str;
            else $str = $str1;
        }
        if ($this->appendbody != '') {
            $str1 = str_replace('</body>', $this->appendbody . '</body>', $str);
            if ($str1 == $str) $str .= $this->appendbody;
            else $str = $str1;
        }
        if (VIEWCOM_OPEN) {
            if (strpos($str, '<?') !== false) {
                $str = preg_replace('@\$GLOBALS\["_this"\]@', '$_this', $str);
            }
        }
        $str=preg_replace('@^[^<]*@', '', $str);
        if (LANG_SWITCH) $str =CorePbb::Language($str,$this->lang);
        ftruncate($this->file, 0);
        rewind($this->file);
        fwrite($this->file, $str);
        $this->__destruct();
        call_user_func_array('_include', [$str, $this]);
    }
    private $_isdisplay=false;
    protected final function display($viewname='',$cachetime=0)
    {
        if(DEBUG&&$this->_isdisplay){
            CorePbb::Error("在视图中的调用的".debug_backtrace()[1]['function']."方法中不能再使用display方法!",false);
        }
        $this->_isdisplay=true;
        if(!$this->cache_start_($cachetime))return;
        $path = PATH_VIEW . ($viewname ? $viewname : $this->classname);
        if(substr($path,-4,1)!='.'&&substr($path,-5,1)!='.') $path .= '.php';
        if (file_exists($path)) {
            $this->_displayStr(file_get_contents($path),$path);
        } else {
            CorePbb::Error("该文件" . $path . "不存在!");
        }
    }
    protected final function assign($name,$value){
        $this->__set($name,$value);
    }
    protected final function appendHead($mes){
        $this->appendhead.=$mes;
    }
    protected final function appendBody($mes){
        $this->appendbody.=$mes;
    }
    protected final function prependHead($mes){
        $this->appendhead=$mes.$this->appendhead;
    }
    protected final function prependBody($mes){
        $this->appendbody=$mes.$this->appendbody;
    }
    public final function __get($name){
        if($name=='lang')
            return $this->lang;
        if($name=='arr__')
            return $this->arr__;
	    if(key_exists($name,$this->arr__))
        return $this->arr__[$name];
	    else return null;
    }
    public final function __set($name,$value){
        if($name=='arr__')$this->arr__=$value;
        else
        $this->arr__[$name]=$value;
    }
    protected final function removeCache($funname=''){
        if($this->file!=null){flock($this->file,LOCK_UN);fclose($this->file);$this->file=null;}
        if($funname=='')$funname=$this->funname;
        $path=PATH_CACHE . str_replace('/', '_', $this->classname . '-' . $funname).$this->lang;
        for($i=0;$i<2;$i++){
            if(file_exists($path.$i)){
                unlink($path.$i);
            }
        }
    }
    public final function __construct($c,$a,$lang)
    {
        $this->classname=$c;
        $this->funname=$a;
        $this->lang=$lang;
        $this->initialize();
    }
    public function __destruct()
    {
        if($this->file!=null){
            flock($this->file,LOCK_UN);
            fclose($this->file);
            $this->file=null;
        }
    }
    public final function __call__($name, $arguments)
    {
        return call_user_func_array([$this,$name],$arguments);
    }
    public final function getAssesAbsUrl($basepath,$filename){
        if(preg_match('@^(https://|http://|//)(.*)@',$filename,$m)){
            return '//'.$m[2];
        }
        $have=false;
        if(strpos($filename,'/')===false){
            $p=dirname($this->_getspaceandclass());
            if($p=='.'||$p=='./')$p='';
            else $p.='/';
            $url=$p.$filename;
            $filepath=$basepath.$url;
            if(!file_exists($filepath))
            {
                $filepath=$basepath.$filename;
                $url=$filename;
            }
            else $have=true;
        }
        else{
            $filepath=$basepath.$filename;
            $url=$filename;
        }
        if($have||file_exists($filepath)){
            $path=str_replace(PATH_PUBLIC,'',$basepath).$url.'?'.filemtime($filepath);
            if(USE_YUN)
                return YUN_NAME.'/'.$path;
            return '//'.WEB_NAME.'/'.$path;
        }
        else CorePbb::Error("没有找到".$filepath."文件!");
        return $filename;
    }
    private function _getspaceandclass(){
        $class=get_class($this);
        $class=str_replace('\\','/',$class);
        $index=strpos($class,'/');
        $path=strtolower(substr($class,$index+1));
        return $path;
    }
    protected final function getControlAbsUrl($url){
        $lang=LANG_SWITCH?$this->lang.'/':"";
        if(preg_match('@^(https://|http://|//)(.*)@',$url,$m)){
            return '//'.$m[2];
        }
       if (strpos($url, '/') === false) {
            $path=$this->_getspaceandclass();
            $funname = $url;
        }
        else{
            $last = strrpos($url, '/');
            $funname = substr($url, $last + 1);
            $path = substr($url,0, $last);
        }
        if (file_exists(PATH_CONTROLS . $path . '.php')) {
            if(LANG_SWITCH)$lang=$this->lang.'/';
            else $lang='';
            $href = "//" . WEB_NAME . '/'.$lang. $path . '/' . $funname;
            return $href;
        }
        else if(DEBUG)\Pbb\CorePbb::Error("该文件:". PATH_CONTROLS . $path . '.php' ." 不存在!");
        return $url;
    }
    protected final function redirect($url=''){
        echo '<script>location.href="'.$this->getControlAbsUrl($url).'"</script>';
    }
    protected final function returnPre(){
        if(isset($_SERVER['HTTP_REFERER'])){
           $this->redirect($_SERVER['HTTP_REFERER']);
        }
        else $this->redirect();
    }
    protected final function flush($sleep=0){
        ob_flush();
        flush();
        if($sleep>0)
        sleep($sleep);
    }
    protected final function httpToHttps(){
        if ($_SERVER["HTTPS"] <> "on")
          {
           $xredir="https://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
           header("Location: ".$xredir);
          }
    }
    protected final function httpsToHttp(){
        if (isset($_SERVER['HTTPS'])&&$_SERVER["HTTPS"] == "on")
        {
            $xredir="http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
            header("Location: ".$xredir);
        }
    }
    protected function initialize(){}
}