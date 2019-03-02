<?php
namespace PbbOther\Helpers;
use Pbb\CorePbb;
use PbbHelpers\ScssToCss;
use PbbHelpers\Util;

class NodeLeave{
    public $leave;
    public $name;
    public $text;
    public $isClose;
    public $haveClose;
    public function __construct($name,$text)
    {
        $this->leave=0;
        $this->name=$name;
        $this->text=$text;
        $this->isClose=false;
        $this->haveClose=false;
    }
}
class XmlPhp{
    private $stack;
    public $childs;
    public function make($str){
        $node=new XmlNode($this,$this,'','');
        $this->__startload($str,$node);
        $node->haveClose=true;
        if(count($node->childs)==0)
            return $node;
        else if(count($node->childs)==1)
            $node=$node->childs[0];
        $node->parent=null;
        return $node;
    }
    public function __construct($str=''){
        if($str!='')
            $this->__startload($str,$this);
    }
    public function __startload($str,$parent){
        $parent->childs=[];
        $this->stack=[];
        $text='';
        $str=preg_replace('@<!--.*?-->@s','',$str);
        $loadtoend='';
        $loadtoendarr=['script','dload'];
        $stack='';
        for($i=0,$len=strlen($str);$i<$len;$i++) {
            $charn = substr($str, $i, 1);
            if ($charn == '<') {
                $hou=substr($str,$i+1,1);
                if($loadtoend&&$hou!='/'){
                    $text.=$charn;continue;
                }
                if(!preg_match('@[?!/a-zA-Z]@',$hou)){
                    $text.=$charn;continue;
                }
                if ($text != '') {
                    $this->stack[] = new NodeLeave('', $text);
                    $text = '';
                }
                $attr = '';
                while (++$i < $len) {
                    $charn = substr($str, $i, 1);
                    if ($charn == '\\') {
                        $attr .= $charn . $str[$i + 1];
                        $i++;
                        continue;
                    } else if ($charn == '>'&&$stack=='') {
                        if(substr($attr,-1)=='?'){
                            if($hou=='?')break;
                        }
                        else if($hou=='?'){
                            if(substr($attr,-1)=='?')break;
                        }
                        else break;
                    }
                    else if($charn=='\''||$charn=='"'){
                        if($charn==$stack)$stack='';
                        else if($stack=='')$stack=$charn;
                    }
                    $attr .= $charn;
                }
                $first=substr($attr,0,1);
                if ($first == '?') {
                    $attr = preg_replace('@^\?php|^\?|\?$@', '', $attr);
                    $this->stack[] = new NodeLeave('php', $attr);
                } else if ($first == '/') {
                    $name = substr($attr, 1);
                    if($loadtoend){
                        if($name==$loadtoend)
                        $loadtoend='';
                        else{
                            $text.='<'.$attr.'>';
                            continue;
                        }
                    }
                    for ($prei = count($this->stack) - 1; $prei >= 0; $prei--) {
                        $stacknode = $this->stack[$prei];
                        if ($stacknode->name == $name&&!$stacknode->isClose) {
                            $stacknode->isClose=true;
                            $stacknode->haveClose=true;
                            for($afteri=$prei+1;$afteri<count($this->stack);$afteri++){
                                $stacknode = $this->stack[$afteri];
                                $stacknode->leave++;
                                $stacknode->isClose=true;
                            }
                            break;
                        }
                    }
                    if ($prei < 0) {
                        //echo("解析错误!");
                    }
                } else if (preg_match('@^[\w_-]+@', $attr, $match)) {
                    $name = $match[0];
                    if(in_array($name,$loadtoendarr))
                    $loadtoend=$name;
                    $attr = trim(substr($attr, strlen($name)));
                    $node=new NodeLeave($name, $attr);
                    $this->stack[] =$node ;
                    if(substr($attr,-1)=='/')
                        $node->isClose=true;
                } else
                    $this->stack[] = new NodeLeave('', '<' . $attr . '>');
            }
            else {
                $text .= $charn;
            }
        }
        if ($text != '') {
            $this->stack[] = new NodeLeave('', $text);
        }
        if(count($this->stack)<1){return;}
        $preleave=$this->stack[0];
        $np=$parent;
        foreach($this->stack as $item){
            if($item->leave<$preleave->leave){
                $ii=$preleave->leave-$item->leave;
                while($ii-->0)
                    $np=$np->parent;
            }
            if($item->leave>$preleave->leave){
                $np=end($np->childs);
            }
            $np->childs[] = $this->create($item, $np);
            $preleave = $item;
        }
    }
    private function create($nodeleave,$parent){
        if($nodeleave->name=='php')
            return new PhpNode($this,$parent,'php',$nodeleave->text);
        if($nodeleave->name=='')
            return new OtherNode($this,$parent,'',$nodeleave->text);
        $child=new XmlNode($this,$parent,$nodeleave->name,$nodeleave->text);
        $child->haveClose=$nodeleave->haveClose;
        return $child;
    }
    public function html($str=null,$composs=false){
        if($str!==null){
            $this->__startload($str,$this);
        }
        else {
            $mes = [];
            if($this->childs!=null)
                foreach ($this->childs as $child) {
                    $mes[] = trim($child->outerHTML());
                }
            return implode('', $mes);
        }
    }
    public function find($name):XmlNode
    {
        $nodes = [];
        $this->__finds($name, $this->childs, $nodes);
        if (count($nodes) == 0) return new XmlNode(null, null, '', '');
        return $nodes[0];
    }
    public function finds($name){
        $nodes=[];
        $this->__finds($name,$this->childs,$nodes);
        return $nodes;
    }
    public function __finds($name,$childs,&$nodes){
        if($childs!=null)
            foreach($childs as $child){
                if(!$child instanceof XmlNode)continue;
                if($name[0]=='.'){
                    if($child->haveClass(substr($name,1)))$nodes[]=$child;
                }
                else if($name[0]=='#'){
                    if($child->id==substr($name,1))$nodes[]=$child;
                }
                else if($name[0]=='['){
                    if($child->haveAttr(substr($name,1,-1)))$nodes[]=$child;
                }
                else if($child->tag==$name){
                    $nodes[]=$child;
                }
                $this->__finds($name,$child->childs,$nodes);
            }
    }
}
class XmlPhpData{
    protected $root;
    public $tag;
    public $text;
    public $parent;
    public $childs;
    public function find($name){
        $nodes=[];
        $this->root->__finds($name,$this->childs,$nodes);
        if(count($nodes)==0)return new XmlNode(null,null,'','');
        return $nodes[0];
    }
    public function findphps(){
        $arr=[];
        foreach($this->childs as $child){
            if($child->tag=='php')$arr[]=$child;
        }
        return $arr;
    }
    public function finds($name){
        $nodes=[];
        $this->root->__finds($name,$this->childs,$nodes);
        return $nodes;
    }
    public function __construct($root,$parent,$tag,$text)
    {
        $this->root=$root;
        $this->parent=$parent;
        $this->tag=$tag;
        $this->text=$text;
        $this->childs=[];
    }
    public function html($str=null){
        if($str!==null){
            if(gettype($str)=='string')
                $this->root->__startload($str,$this);
            else if($str instanceof XmlPhpData){
                $this->childs=[$str];
            }
            else if(gettype($str)=='array'&&$str[0] instanceof XmlPhpData){
                $this->childs=$str;
            }
            else{
                echo($str."该类型不支持");
            }
        }
        else{
            if(count($this->childs)==0)return '';
            $mes=[];
            foreach($this->childs as $child){
                $mes[]=$child->outerHTML();
            }
            $html=implode('',$mes);
            return $html;
        }
    }
    protected function outerHTML__($str)
    {
        $this->text=$str;
        if($this->parent==null){$parent=new XmlPhpData($this->root,null,'','');$this->parent=$parent;$parent->childs[]=$this;}
        $this->insert($this->parent,$str,$this->parentindex(),1);
    }
    public function outerHTML($str=null){
        if($str===null){
            return $this->text;
        }
        else $this->outerHTML__($str);
    }
    public function remove(){
        $index=$this->parentindex();
        array_splice($this->parent->childs,$index,1);
        $this->parent=null;
    }
    private function insert($node,$str,$index,$length=0){
        $nodes=[];
        if(gettype($str)=='string'){
            $parent=$this->root->make("");
            $this->root->__startload($str, $parent);
            $nodes=&$parent->childs;
        }
        else if(gettype($str)=='array'&&$str[0] instanceof XmlPhpData)
            $nodes=$str;
        else if($str instanceof XmlPhpData){
            $nodes=[$str];
        }
        else return;
        foreach($nodes as $n){
            $n->parent=$node;
        }
        array_splice($node->childs,$index,$length,$nodes);
    }
    private function parentindex(){
        return array_search($this,$this->parent->childs);
    }
    public function before($str){
        $this->insert($this->parent,$str,$this->parentindex());
    }
    public function after($str){
        $this->insert($this->parent,$str,$this->parentindex()+1);
    }
    public function prepend($str){
        $this->insert($this,$str,0);
    }
    public function append($str){
        $this->insert($this,$str,count($this->childs));
    }
    public function isNull(){
        return $this->root===null;
    }
    public function __toString()
    {
        return $this->outerHTML();
    }
}
class XmlNode extends XmlPhpData {
    public $haveClose;
    public $attrs;
    private $attrssign;
    private $selfClose=false;
    private $slot;
    private $ref;
    private $isarray;
    public function __isref($name){
        return key_exists($name,$this->ref);
    }
    public function __isarray($name){
        return key_exists($name,$this->isarray);
    }
    public function __slot($name='',$value=null){
        if($name=='')return $this->slot;
        if($value===null){
            return $this->slot[$name];
        }
        else $this->slot[$name]=$value;
    }
    public function __construct($root,$parent,$tag,$text)
    {
        $this->slot = [];
        $this->ref = [];
        $this->isarray = [];
        if ($tag == 'tmp') {
            $text = str_replace('$', '', $text);
        }
        parent::__construct($root, $parent, $tag, $text);
        $this->attrs = [];
        $this->attrssign = [];
        $arr = [];
        $text = preg_replace_callback('@[a-zA-Z&:\@\._][^= ]+\s*=\s*([\'"]).*?\1|[a-zA-Z&:\@\._][^= ]+\s*=[^ ]+|[^ ]+@s', function ($match) use (&$arr) {
            $arr[] = $match[0];
        }, $text);
        $text = trim($text);
        if (self::$supportthis == '')
            self::$supportthis = call_user_func_array('_include', [file_get_contents(PATH_CONFIG . 'jsupporthis.php')]);
        if ($text != '')
            $arr = array_merge($arr, preg_split('@ +@', $text));
        foreach ($arr as $ar) {
            if (substr($ar, 0, 2) == '<?')
                $kv = [$ar];
            else
                $kv = preg_split('@=@', $ar, 2);
            if (trim($kv[0]) == '') continue;
            if ($kv[0] == '/') {
                $this->selfClose = true;
                continue;
            }
            $sign = '';
            if (count($kv) == 1) {
                $kv[1] = '__null';
            } else {
                $kv[1] = trim($kv[1]);
                if ($kv[1][0] == '\'' || $kv[1][0] == '"') {
                    $sign = $kv[1][0];
                }
                $kv[1] = preg_replace('@^[\'"]|[\'"]$@', '', trim($kv[1]));
            }
            if ($this->tag == 'tmp') {
                if ($kv[0][0] == '&') {
                    $kv[0] = substr($kv[0], 1);
                    $this->ref[$kv[0]] = true;
                } else if (substr($kv[0], 0, 3) == '...') {
                    $kv[0] = substr($kv[0], 3);
                    $this->isarray[$kv[0]] = true;
                }
            }
            if (substr($kv[0], 0, 2) == 'on')//对ajax等需要this的进行转换
                $kv[1] = preg_replace_callback('@([\w_]+)\s*\(@', function ($match) {
                    if(in_array($match[1],self::$supportthis))
                    return $match[1] . '.call(this,';
                    return $match[0];
                }, $kv[1]);
            $this->attrs[$kv[0]] = $kv[1];
            $this->attrssign[$kv[0]] = $sign;
        }
    }
    public function attr($name,$value=null){
        if($value===null){
            if($this->haveAttr($name)){
                $v=$this->attrs[$name];
                if($v=='__null')return null;
                return $v;
            }
            return null;
        }
        $this->attrs[$name]=$value;
    }
    public function haveAttr($name){
        return key_exists($name,$this->attrs);
    }
    private static $supportthis='';
    public function outerHTML($str=null){
        if($str===null){
            if(key_exists('_',$this->slot))
                return $this->slot['_'];
            $attr='';
            foreach($this->attrs as $k=>$v){
                if($v!='__null'){
                    $sign='"';
                    if(key_exists($k,$this->attrssign))
                        $sign=$this->attrssign[$k];
                    $attr.=' '.$k.'='.$sign.$v.$sign;
                }
                else
                    $attr.=' '.$k;
            }
            $html=$this->html();
            if(!$this->haveClose) {
                if($this->selfClose)$attr.='/';
                return "<{$this->tag}{$attr}>";
            }
            if($this->tag=='')return $html;
            return "<{$this->tag}{$attr}>".$html."</{$this->tag}>";
        }
        $this->outerHTML__($str);
    }
    public function __get($name){
        return $this->attr($name);
    }
    public function __set($name,$value){
        $this->attr($name,$value);
    }
    public function haveClass($name):bool{
        if(key_exists('class',$this->attrs)){
            $arr=preg_split('@ +@',$this->attrs['class']);
            return in_array($name,$arr);
        }
        return false;
    }
}
class PhpNode extends XmlPhpData {
    public function __construct($root,$parent,$tag,$text){
        $text=preg_replace('@\{\$([\w_]+|[\w_]+\[.*\])\s*\}@','${$1}',$text);
        parent::__construct($root,$parent,$tag,$text);
    }
    public function outerHTML($str=null){
        if($str===null)
            return '<?'.$this->text.'?>';
        else $this->outerHTML__($str);
    }
    public function html($str=null){
        if($str===null){
            return $this->text;
        }
        else $this->text=$str;
    }
}
class OtherNode extends XmlPhpData {

}
class TempObj{

    public $id;
    public $have;
    public $dom;
    private $php;
    public $args;
    private $oriargs=['slot','attr'];
    public $funname;
    public $havereturn;
    private $base;
    public function finds($name){
        return $this->dom->finds($name);
    }
    public function __construct(XmlNode $dom,$index,TempHandler $base)
    {
        $this->base=$base;
        $this->dom=$dom;
        $this->id=$dom->tagname;
        $this->funname=str_replace('-','_',$this->id.$index.'_');
        $this->args=[];
        $html=$dom->html();
        $this->havereturn=preg_match('@return \s*false@',$html);
        foreach($dom->attrs as $attr=>$v){
            if(in_array($attr,$this->oriargs)){
                CorePbb::Error($this->id.'该模板中不能用'.$attr.'作为变量名!',false);
            }
            if($attr!='tagname')
                $this->args[]=$attr;
        }
        foreach($this->oriargs as $name){
            if(strpos($html,$name)!==false){
                $this->args[]=$name;
            }
        }
    }
    public function getfunmes()
    {
        $args = '';
        foreach ($this->args as $v) {
            if ($this->dom->__isref($v))
                $args .= '&$' . $v . ',';
            else $args .= '$' . $v . ',';
        }
        $args=substr($args,0,-1);
        $html = trim($this->dom->html());
        $html = preg_replace('@\?>\s+<@s', '?><', $html);
        if(count($this->phpfunchange)>0)
        $html=preg_replace_callback('@([\w_:>]+)\s*\(@',function($match){
             if(key_exists($match[1],$this->phpfunchange))
                 return $this->phpfunchange[$match[1]].'(';
             return $match[0];
        },$html);
        $static='';
        $html=preg_replace_callback('@static \$[^;]+;@',function($match)use(&$static){
             $static.=$match[0];
        },$html);
        return 'function ' . $this->funname . "(" . $args . "){".$static."return include('str://" . $this->commaChange($html) . "');}";
    }
    private $phpfunchange;
    public function getphp(){
        return $this->php;
    }
    public function setphp(&$php,&$funchange){
        $this->php=$php;
        $this->phpfunchange=$funchange;
    }
    private function commaChange($str){
        $str = str_replace('\\', '\\\\', $str);
        return str_replace("'",'\\\'',$str);
    }
    public function preference(XmlNode $node){
        $index=0;
        foreach($this->args as $arg){
            if(in_array($arg,$this->oriargs))continue;
            if($this->dom->__isarray($arg))continue;
            $nodearg=$node->attr($arg);
            if($nodearg===null&&$node->haveAttr($arg))$nodearg='';
            $thisarg=$this->dom->attr($arg);
            if($thisarg===null){
                if($nodearg===null)return -1;
                $index+=10;
            }
            else{
                if($nodearg!==null)$index+=1;
            }
        }
        return $index;
    }
    private function changearg($tag,$arg,$isref,$control,&$after,$path=''){
        if($isref){
            if(!preg_match('@^\{\$([\w_]+)\}$@',$arg,$m)){
               CorePbb::Error("{$arg}不是引用");
            }
            else{
                $n=$m[1];
                if($control->$n!==null)
                    return '$GLOBALS["_this"]->arr__["'.$n.'"]';
                else return '$'.$n;
            }
        }
        if(preg_match('@^(true|false|null|\[.*\]|[\d]+|[\d]+\.[\d]+)$@',$arg))return $arg;
        $arg=preg_replace_callback('@function\s*[\w_]*\s*\([^;\)]*\)\s*\{|\{(\$?[a-zA-Z_][\w_]*)\s*(\([^\{\};]*\)|\[[^\{\};]\])?\}@',function($m)use($control,$path,$tag){
            if(count($m)<2)return $m[0];
            if(!isset($m[2]))$m[2]='';
            if($m[1][0]=='$'){
                $n=substr($m[1],1);
               $m[0]= "(isset({$m[1]})?{$m[1]}:((\$GLOBALS[\"_this\"]->{$n}!==null)?\$GLOBALS[\"_this\"]->{$n}{$m[2]}:\\Pbb\\CorePbb::Error('{$tag}中该变量{$m[1]}不存在')))";
            }
            else if(preg_match('@^\{([A-Z_]+)\}$@',$m[0],$m1)){
                $m[0]= '(defined("'.$m1[1].'")?'.$m1[1].':"'.$m1[0].'")';
            }
            else if(preg_match('@^\(@',$m[2])){
                if(is_callable([$control,$m[1]])) {
                    if(!PBB_MODULE&&DEBUG){
                        $fun=new \ReflectionMethod($control,$m[1]);
                        $funnum=0;
                        foreach($fun->getParameters() as $p){
                            if(!$p->isDefaultValueAvailable())
                                $funnum++;
                        }
                        $argnum=0;
                        if(trim(substr($m[2],1,-1))){
                            $argnum=count(explode(',',$m[2]));
                        }
                        if($argnum<$funnum){
                            $path=str_replace(PATH_VIEW,'',$path);
                            CorePbb::Error(substr(get_class($control),9)."控制器{$path}的视图的{$m[1]}方法参数数量不对!");
                        }
                    }
                    $m[0] = '$GLOBALS["_this"]->' . $m[1] . $m[2];
                }
                else{
                    $path=str_replace(PATH_VIEW,'',$path);
                    CorePbb::Error(substr(get_class($control),9)."控制器{$path}的视图的没有{$m[1]}的public方法!");
                }
            }
            else $m[0]="'".$this->commaChange($m[0])."'";
            return '\'.'.$m[0].'.\'';
        },$arg);
        $arg="'".$arg."'";
        $arg=preg_replace('@^\'\'\.|\.\'\'$@','',$arg);
        return $arg;
    }
    public function getmes(XmlNode $node,$havereturn,$control,$path=''){
        $args=[];
        $nodeargs=$node->attrs;
        if(key_exists("tagname",$nodeargs))unset($nodeargs['tagname']);
        $front='';$index=0;
        $after='';
        foreach($this->args as $arg){
            $isref=$this->dom->__isref($arg);
            if($this->dom->__isarray($arg)){
                $argss='[';
                foreach($nodeargs as $k=>$v){
                    if($v===null||$v==='__null')$v='null';
                    else if(strpos($v,'<?')!==false){
                        $index++;
                        $front.='ob_start();include(\'str://'.$this->commaChange($v).'\');$_t'.$index.'=ob_get_contents();ob_end_clean();';
                        $v='$_t'.$index;
                    }
                    else $v=$this->changearg($node->tag,$v,$isref,$control,$after,$path);
                    $argss.="'$k'=>$v,";
                }
                if($argss!='[')
                    $argss=substr($argss,0,-1);
                $argss.=']';
                $args[]=$argss;
                continue;
            }
            if($node->haveAttr($arg)){
                $nodearg=$node->attr($arg);
                if(key_exists($arg,$nodeargs))
                unset($nodeargs[$arg]);
                if($nodearg===null){
                    $args[]='null';
                    continue;
                }
            }
            else $nodearg=$this->dom->attr($arg);
            if($nodearg!==null){
                if(strpos($nodearg,'<?')!==false){
                    $index++;
                    $front.='ob_start();include(\'str://'.$this->commaChange($nodearg).'\');$_t'.$index.'=ob_get_contents();ob_end_clean();';
                    $args[]='$_t'.$index;
                }
                else
                 $args[]=$this->changearg($node->tag,$nodearg,$isref,$control,$after,$path);
            }
            else if($arg==$this->oriargs[1]){
                $oattr='';
                foreach($nodeargs as $k=>$v){
                     if($v!='__null')
                         $oattr.="{$k}=\"{$v}\" ";
                     else $oattr.=$k.' ';
                }
                $oattr=trim($this->commaChange($oattr));
                $args[]='\''.$oattr.'\'';
            }
            else if($arg==$this->oriargs[0]){
                $slotchange=function ($mes){
                    $mes=$this->commaChange(trim($mes));
                    return $mes;
                };
                $slot='[0=>\''.$slotchange($node->html()).'\'';
                foreach($node->finds('[slot]') as $s){
                    $slot.=',\''.$s->attr('slot').'\'=>\''.$slotchange($s->outerHTML()).'\'';
                }
                $args[]=$slot.']';
            }
            else return false;
        }
        if(count($this->args)==0)$args='';else $args=implode(',',$args);
        $html=$node->outerHTML();
        if($havereturn)
            return '<?'.$front.'if('.$this->funname.'('.$args.')===false):'.$after.'?>'.$html.'<?endif?>';
        else return '<? '.$front.$this->funname.'('.$args.');'.$after.'?>';
    }
}
class TempHandler{
    private static $childs;
    private static $phphaveload=[];
    private $doc;
    private $path;
    private $style;
    private $control;
    public function isNull(){
        return $this->doc==null;
    }
    private function getarglen($arg){
        $stack=[];
        for($i=0;$i<strlen($arg);$i++){
            $char=$arg[$i];
            if($char=='\\'){
                $i++;
            }
            else if($char=='\''||$char=='"'){
                if(count($stack)==0)$stack[]=$char;
                else if(end($stack)==$char){
                    unset($stack[count($stack)-1]);
                    $stack=array_merge($stack);
                }
                else if(end($stack)!='"'&&end($stack)!='\'')
                    $stack[]=$char;
            }
            else if($char=='('||$char==')'){
                if(count($stack)==0){
                    if($char==')')break;
                    $stack[]=$char;
                }
                else if(end($stack)!='"'&&end($stack)!='\''){
                    if(end($stack)==$char)$stack[]=$char;
                    else {
                        unset($stack[count($stack)-1]);
                        $stack=array_merge($stack);
                    }
                }
            }
        }
        return $i;
    }
    private function _html($childs){
        $front = '';
        foreach ($childs as $child) {
            if ($child->have) {
                $php=$child->getphp();
                if(!in_array($php,self::$phphaveload)){
                    self::$phphaveload[]=$php;
                    $front.=$php;
                }
                $front .= $child->getfunmes();
            }
        }
        $front .= '?>';
        $html =$front.$this->doc->html();
        while(preg_match('@\$this->\s*([\w_]+)\s*\(([^;]*\))@s',$html,$m)){
            if(DEBUG){
                if(!method_exists($this->control,$m[1])){
                    CorePbb::Error("该视图中{$m[1]}方法在控制器中不存在!");
                }
                $fun=new \ReflectionMethod($this->control,$m[1]);
                if($fun->isPrivate()){
                    CorePbb::Error(str_replace(PATH_VIEW,'',$this->path)."该视图中{$m[1]}方法是私有方法!");
                }
            }
            $arg=$m[2];
            $i=$this->getarglen($arg);
            $arg=substr($m[2],0,$i);
            $shengyu=substr($m[2],$i);
            $html=str_replace($m[0],'$GLOBALS["_this"]->__call__("'.$m[1]."\",[{$arg}]".$shengyu,$html);
        }
        $html=str_replace('$this','$GLOBALS["_this"]',$html);
        if($childs==self::$childs)
            $html = '<?foreach($_this->arr__ as $k=>$item){$$k=$item;} $GLOBALS["_this"]=$_this;'.$html;
        else $html='<?'.$html;
        $html=preg_replace_callback('@\{\{.*?\}\}|\{(:?\$?[a-zA-Z_][\w_]*)([^\{\};]*)\}@',function($match){
            if(count($match)<2)return $match[0];
            $match[2]=trim($match[2]);
            $mes=str_replace('"', '\\"', $match[0]);
            $mes=str_replace('$', '\\$', $mes);
            $iscache=$match[1][0]==':';
            if($iscache)$match[1]=substr($match[1],1);
            if($match[1][0]=='$') {
                if ($match[2] == '' || preg_match('@^(\[.+\])$@', $match[2])) {
                    $match[1] = substr($match[1], 1);
                    $name = $match[1] . $match[2];
                     $mes = "?if(isset(\${$name})){_echo(\${$name});}else if(\$GLOBALS[\"_this\"]->{$match[1]}!==null){ _echo(\$GLOBALS[\"_this\"]->{$name});}else _echo(\"{$mes}\");?";
                } else return $match[0];
            }
            else{
                if(preg_match('@^[A-Z_]+$@',$match[1])){
                    if(defined($match[1])){
                        if($match[2]==''){
                            return constant($match[1]);
                        }
                        else if(preg_match('@^\[(\d+)\]$@',$match[2],$m)){
                            return substr(constant($match[1]),$m[1],1);
                        }
                    }
                }
                if(!preg_match('@^\(.*\)$@',$match[2]))return $match[0];
                if(!preg_match('@^(:[\w_]+|[\w_]+)$@',$match[1]))return $match[0];
                $funname=$match[1];
                $funexist=method_exists($this->control,$funname);
                if($funexist){
                    if(DEBUG&&!extension_loaded('controls')){
                        $path=str_replace(PATH_VIEW,'',$this->path);
                        $fun=new \ReflectionMethod($this->control,$funname);
                        if($fun->isPrivate()){
                            CorePbb::Error(substr(get_class($this->control),9)."控制器{$path}的视图{$funname}方法是私有的!");
                        }
                        $funnum=0;
                        foreach($fun->getParameters() as $p){
                            if(!$p->isDefaultValueAvailable())
                                $funnum++;
                        }
                        $argnum=0;
                        if(trim(substr($match[2],1,-1))){
                            $argnum=count(explode(',',$match[2]));
                        }
                        if($argnum<$funnum){
                            CorePbb::Error(substr(get_class($this->control),9)."控制器{$path}的视图的{$funname}方法参数数量不对!");
                        }
                    }
                    $match[2]=substr($match[2],1,-1);
                    $mes="?_echo(\$GLOBALS[\"_this\"]->__call__(\"{$funname}\",[{$match[2]}]));?";
                }
                else
                    return "<?if(function_exists(\"{$match[1]}\"))_echo({$match[1]}{$match[2]});else _echo(\"{$mes}\");?>";
            }
            if($iscache)
                return '<?="<"?>'.$mes.'<?=">"?>';
            else
                return '<'.$mes.'>';
        },$html);
        //var_dump($html);die;
        return $html;
    }
    public function html()
    {
        return $this->_html(self::$childs);
    }
    private function preInclude($html,$path){
        $html=preg_replace_callback('@(=\s*|)(include_once|require_once|include|require)\s*\([\'"]([^;,]+)\)\s*;?@',function($match)use($path){
            $p = include('str://<? return ' . $match[3] . ';?>');
            if(substr($p,0,6)=='str://')return $match[0];
            if($p=='')return $match[0];
            $mes='';
            if(file_exists($p))$mes=file_get_contents($p);
            else{
                $path=$path.'/'.$p;
                $path=preg_replace('@/\./@','/',$path);
                $path=preg_replace('@/[^/]+/\.\./@','/',$path);
                if(file_exists($path))
                $mes=file_get_contents($path);
            }
            if($mes==''){
                CorePbb::Error("没有找到{$p}!");
                return $match[0];
            }
            else{
                $mes=$this->preInclude($mes,dirname($path));
            }
            return '?>'.$mes.'<?';
        },$html);
        return $html;
    }
    private function prenode($node,$extname='',$getfunmes=false,$path='',&$funmes=[],$arr=[]){
        foreach($node->childs as $child){
            if(!$child instanceof XmlNode)continue;
            if($child->tag=='')continue;
            if(count($child->childs)>0)$this->prenode($child,$extname,$getfunmes,$path,$funmes,$arr);
            if($child->tag==$extname)continue;
            $tmpnode=null;
            $index=-1;
            foreach(self::$childs as $tmp) {
                if ($child->tag == $tmp->id) {
                    $i = $tmp->preference($child);
                    if ($i > $index) {
                        $index = $i;
                        $tmpnode = $tmp;
                    }
                }
            }
            if($tmpnode!=null){//&&$extname!=$tmpnode->funname
                if(in_array($tmpnode->id,$arr)){
                    $str='出现循环调用:<br>'.NEWLINE;
                    foreach(array_merge($arr,[$tmpnode->id]) as $error){
                        $str.=$error."&nbsp;&nbsp;&nbsp;";
                    }
                    CorePbb::Error($str);
                }
                if(!$tmpnode->have){
                    if($getfunmes)
                        $funmes[]=$tmpnode;
                    $this->prenode($tmpnode->dom,$tmpnode->id,$getfunmes,$path,$funmes,array_merge($arr,[$tmpnode->id]));
                }
                $tmpnode->have=true;
                $r=$tmpnode->getmes($child,$tmpnode->havereturn,$this->control,$path,$funmes);
                if($r!==false) $child->__slot('_',$r);
            }
        }
        return $funmes;
    }
    public function __construct($html,$control,$path='')
    {
        if($html=='')return;
        $this->control=$control;
        if($path)
        $html=$this->preInclude($html,dirname($path));
        $this->PreTemps();
        $this->path=$path;
        $this->LoadTemp($html);
        $this->style='';
        foreach(self::$childs as $other){
            foreach($other->finds('slot') as $slot){
                $name='0';
                if($slot->name!=null){
                    $name="\"{$slot->name}\"";
                }
                $slot->outerHTML("<?if(isset(\$slot[{$name}]))include('str://'.\$slot[{$name}]);?>");
            }
        }
        $GLOBALS['_tmp']=$this;
        if($path)
        $this->prenode($this->doc,'',false,$path);
    }
    public function LoadStr($str){
        $doc=new XmlPhp($str);
        $fun=$this->prenode($doc,'',true);
        $this->doc=$doc;
        return $this->_html($fun);
    }
    private function PreTemps(){
        if(self::$childs!=null)return;
        self::$childs=[];
        $index=100;
        $files=Util::getFiles(PATH_COMPONENT,-1,function($name){
            return substr($name,-4)=='.tmp';
        });
        foreach($files as $file){
            $mes=file_get_contents($file);
            $nodes=$this->LoadTemp($mes,basename($file,'.tmp'));
            $mes='';
            foreach($this->doc->childs as $child){
                if($child instanceof PhpNode){
                     $child->remove();
                     $mes.=$child->html();
                }
            }
            $phpfunchange=[];
            $php=preg_replace_callback('@function ([\w_]+)\s*\(@',function($match)use(&$phpfunchange,&$index){
                $name=$match[1].($index++).'_';
                $phpfunchange[$match[1]]=$name;
                return 'function '.$name.'(';
            },$mes);
            $php=preg_replace_callback('@([\w_:>]+)\s*\(@',function($match)use($phpfunchange){
                 if(key_exists($match[1],$phpfunchange))
                     return $phpfunchange[$match[1]].'(';
                 return $match[0];
            },$php);
            foreach($nodes as $node){
                $node->setphp($php,$phpfunchange);
            }
        }
    }
    private function Scoped($node){
        foreach($node->finds('style') as $style){
            $html=trim($style->html());
            if(substr($html,0,2)=='&{'&&$style->parent!=null&&$style->parent instanceof XmlNode&&$style->parent->tagName!='head'){
                $id='data-'.substr(md5($html),0,11);
                $html='['.$id.']'.substr($html,1);
                $style->html($html);
                $style->parent->attr($id,'__null');
            }
        }
    }
    private function LoadTemp($html,$id=''){
        if(DEBUG){//检查错误
            if(preg_match('@<\?(=\$[\w_]+\s*=\s*(\[|array).*)@',$html,$match)){
                CorePbb::Error("不能打印数组{$match[1]}");
            }
            if(preg_match('@((\+\+|--)\$this->[\w_]+)\s*\[[^=]+\]|\$this->[\w_]+\s*\[[^=]+\]\s*([+\-*/%=]{2}|=)[^;]*@',$html,$match)){
                CorePbb::Error("不能改变控制器中数组的值{$match[0]}");
            }
        }
        $doc=new XmlPhp($html);
        $this->Scoped($doc);
        $tmps=$doc->finds("tmp");
        $index=0;
        $childs=[];
        foreach($tmps as $tmp){
            $tmp->remove();
            $name=$tmp->tagname;
            if(!$name){
                $name=$id;
                $tmp->tagname=$id;
            }
            if($name){
                $child=new TempObj($tmp,$index++,$this);
                array_unshift(self::$childs,$child);
                $childs[]=$child;
            }
        }
        $this->doc=$doc;
        return $childs;
    }
}