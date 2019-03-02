<?php
namespace Pbb;

    use Controls\Pbbcontrol\ControlBase;

    class CorePbb
    {
        public static function loadclass($class)
        {
            $classname = explode('\\', strtolower($class));
            //$cname = explode('_', end($classname))[0];
            $cname=end($classname);
            unset($classname[count($classname)-1]);
            if(count($classname)>1&&substr($classname[1],0,3)=='pbb')unset($classname[0]);
            $sname=implode('/',$classname);
            if($sname!=''){
                $path=$sname.'/'.$cname . '.php';
                if (strpos($sname,'pbb')!==0) {
                    $path='app/'.$path;
                }
                else{
                    $path='core/'.$path;
                }
            }
            else
                $path='core/pbbglobal/'.$cname.'/'.$cname . '.php';
            $path=PATH_ROOT.$path;
            if(file_exists($path))
                call_user_func_array('_include',[file_get_contents($path)]);
            else
                self::Error("没找到{$path}该文件!",false);
        }
        public static function dispatch()
        {
            $args = [];
            $a='';$c='';
            $path = isset($_SERVER['REDIRECT_URL']) ?substr($_SERVER['REDIRECT_URL'],1) :'';
            if($path===false)$path='';
            if(substr($path,-1)=='/')$path=substr($path,0,-1);
            $arr = explode('/', $path);
            $lang=LANG_NORMAL;
            if(LANG_SWITCH){
                if(key_exists($arr[0],LANG_ALL)){
                    $lang=$arr[0];
                    array_shift($arr);
                }
                else if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
                    $temp=substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
                    if(key_exists($temp,LANG_ALL))
                        $lang=$temp;
                }
            }
            $count=count($arr);
            if($count>0&&$path!='') {
                $a = $arr[$count - 1];
                if(substr($a,0,2)=='__'){
                    self::Error("{$a}方法不能用__开头!");
                }
                unset($arr[$count - 1]);
                if($count>1)
                    $c = implode('\\', $arr);
            }
            $ismac=isset($_REQUEST['mac__']);
            if ($ismac){
                $args = explode('&',urldecode($_REQUEST['mac__']));
                for($i=0;$i<count($args);$i++){
                    $mes=$args[$i];
                    if(strlen($mes)>2&&substr($mes,0,1)){
                        switch (substr($mes,1,1)){
                            case 'i':$args[$i]=intval(substr($mes,2));
                                break;
                            case 'd':$args[$i]=doubleval(substr($mes,2));
                                break;
                            case 'b':$args[$i]=substr($mes,2,1)=='1';
                                break;
                            case '[':
                            case '{':
                                $args[$i]=json_decode(substr($args[$i],1),true);
                        }
                    }
                }
            }
            else if (!empty($_SERVER['QUERY_STRING']))
                $args = explode('&', urldecode($_SERVER['QUERY_STRING']));
            if ($c == '') $c = str_replace('/','\\',CONTROLS_MAIN);
            if ($a == '') $a = CONTROLS_FUN;
            $class='\\Controls\\'.$c;
            $obj = new $class(str_replace('\\','/',$c),$a,$lang);
            if (is_callable([$obj, $a])){
                if(extension_loaded('controls')){
                    $arr=$obj->__getfunargs();
                    if(key_exists($a,$arr)){
                        $arr=$arr[$a];
                        for($i=0;$i<count($arr);$i++){
                            if($i<count($args))$arr[$i]=$args[$i];
                        }
                        $args=$arr;
                    }
                    else $args=[];
                }
                $json=call_user_func_array([$obj,$a],$args);
                if($json!==null){
                    ob_clean();
                    $type=gettype($json);
                    if($type=='string'){
                        echo $json;
                    }
                    else if(!$ismac){
                        if($type=='object'||$type=='array'){
                            echo json_encode($json);
                        }
                        else echo $json;
                    }
                    else{
                         if($type=='boolean'){
                            echo ':b'.($json?1:0);
                        }
                        else if($type=='integer'||$type=='float'||$type=='double'){
                            echo ':d'.$json;
                        }
                        else{
                            echo ':'.json_encode($json);
                        }
                    }
                }
            }
            else{
                if(DEBUG)
                    self::Error("没有公共的{$c}\\{$a}方法");
                else{
                    header("HTTP/1.1 404 Not Found");
                    self::Error(404);
                }
            }
        }
        public static function Language($html,$lang){
            if(isset($GLOBALS['_langall'])){
            }
            else if(file_exists(PATH_LANG.$lang.'.php'))
                $GLOBALS['_langall']=call_user_func_array('_include',[file_get_contents(PATH_LANG.$lang.'.php')]);
            else $GLOBALS['_langall']=[];
            $langindex=0;
            foreach(LANG_ALL as $k=>$v){
                if($lang==$k){
                    break;
                }
                $langindex++;
            }
            $html = preg_replace_callback('@\{\{.*?\}\}|\{([^'.LANG_SPLIT.'\{\}\(\)]+)(('.LANG_SPLIT.'[^'.LANG_SPLIT.'\{\}]+){0,})\}@', function ($match)use($langindex){//对多语言进行转换
                if(count($match)<2){}
                else if($match[2]==''){
                    if(key_exists($match[1],$GLOBALS['_langall']))
                        return $GLOBALS['_langall'][$match[1]];
                }
                else{
                    $arr=explode(LANG_SPLIT,$match[2]);
                    $arr[0]=$match[1];
                    if($langindex<count($arr)){
                        $GLOBALS['_langall'][$match[1]]=$arr[$langindex];
                        return $arr[$langindex];
                    }
                }
                return $match[0];
            }, $html);
            return $html;
        }
        public static function Error($mes='',$toErrorpage=true)
        {
            if($mes){
                ob_clean();
                if (DEBUG) {
                    echo('<br>' . $mes);
                    self::Log($mes,true);
                }
                else if(!$toErrorpage){
                    echo('Busy!');
                }
                else {
                    call_user_func_array('_include',[file_get_contents(PATH_VIEW.'error.php')]);
                    self::Log($mes,true);
                }
            }
            stream_wrapper_unregister('str');
            die;
        }
        public static function Log($mes, $debug = false)
        {
            if (!DEBUG||$debug) {
                file_put_contents(PATH_ROOT . 'tmp/logs/' . date('Y-m-d') . '.txt',$mes.NEWLINE,FILE_APPEND);
            }
            else {
                echo $mes;
            }
        }
    }
    class StrStream{
        private $str;
        private $position;
        public function stream_open($path, $mode, $options, &$opened_path) {
            $this->str=$path;
            $this->position=6;
            return true;
        }
        public function stream_read($count) {
            $str=substr($this->str,$this->position,$count);
            $this->position+=$count;
            return $str;
        }
        public function stream_eof() {}
        public function stream_stat() {}
    }
