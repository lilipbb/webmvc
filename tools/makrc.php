<?php

use PbbHelpers\Util;
$isrc=true;
include_once ("base.php");
include_once("makext.php");
if(count($args)<2){
    echo("指令错误!");return;
}
$cmd=$args[1];
   global $name1,$cmd;
   switch (strtolower($cmd[0])){
       case 'b':
           include_once ("serverStop.php");
           __createrc();
           include_once ("serverStart.php");
           break;
       case 'u':
           __uninstallrc();
           break;
       default:
           echo("你的指令有错误");
           break;
   }
   function __createrc(){
       global $extpath,$rcsourcepath;
       $rcextpath=$extpath.'rc/';
       if(file_exists($rcextpath))Util::RmDir($rcextpath);
       Util::MkDir($rcextpath);
       __init('rc');
       $mes=["namespace Rc;"];
       $mes[]="class Rc{";
       $mes1=["namespace Rc;"];
       $mes1[]="class Rctime{";
       foreach ($rcsourcepath as $item) {
           foreach (Util::getFiles($item,-1) as $file) {
               $funname=str_replace(PATH_ROOT,'',$file);
               $funname='R'.md5($funname);
               $str=MakeResource::GetString($file);
               $ispic=MakeResource::$ispic;
               if($str!='') {
                   $mes1[] = "public static function {$funname}(){";
                   $mes1[]="return";
                   $mes1[]='"'.filemtime($file).'";';
                   $mes1[]='}';
                   if($ispic){
                       $funname64=$funname.'64';
                       $mes[] = "public static function {$funname64}(){";
                       $mes[]="return";
                       $mes[]=$str.';';
                       $mes[]='}';
                       $mes[] = "public static function {$funname}(){";
                       $mes[]="return";
                       $mes[]='base64_decode(self::'.$funname64.'());';
                       $mes[]='}';
                   }
                   else{
                       $mes[] = "public static function {$funname}(){";
                       $mes[]="return";
                       $mes[]=$str.';';
                       $mes[]='}';
                   }
               }
           }
       }
       $mes[]='public static function __callStatic($name, $arguments){return false;}';
       $mes[]="}";
       $mes1[]='public static function __callStatic($name, $arguments){return false;}';
       $mes1[]="}";
       file_put_contents($rcextpath.'rc/rc.zep',implode("\r\n",$mes));
       file_put_contents($rcextpath.'rc/rctime.zep',implode("\r\n",$mes1));
       __build('rc');
   }
   function __uninstallrc(){
        __uninstall(['rc']);
   }
class MakeResource
{
    private static $maxsize=15000;
    private static $maxpartsize=120;
    public static $ispic=false;
    public static function __callStatic($name, $arguments)
    {
        return false;
    }
    public static function GetString($file){
        if(!file_exists($file)){
            echo $file."文件不存在!";
            return '';
        }
        if(filesize($file)>self::$maxsize*self::$maxpartsize){
            echo $file."文件过大!";
            return '';
        }
        $mes=file_get_contents($file);
        $mes=preg_replace_callback('@__(FILE|DIR)__@',function($match)use($file){//替换所有__File__
             if($match[1]=='FILE'){
                 return '"'.$file.'"';
             }else{
                 return '"'.dirname($file).'"';
             }
        },$mes);
        $mes=preg_replace_callback('@(.)?(include_once|include|require_once|require)\s*([^;\{\}=*\r\n]*)\s*;@',function($match)use($file){//对include等进行替换来支持内存文件
            $path='';
            preg_match('@[\w\d_]+@',$match[0],$m);
            $match[3]=trim($match[3]);
            if($match[3]!=''&&count($m)>0&&$m[0]==$match[2]&&!preg_match('@\$@',$match[0])){

                if(substr($match[3],-1)==')'){
                    if($match[3][0]=='(')$match[3]=substr($match[3],1,-1);
                    else return $match[0];
                }
                 if(preg_match('@^[a-zA-Z\'"]@',$match[3]))
                 eval('$path=' . $match[3] . ';');
                if(file_exists($path)){}
                else{
                    while(true) {
                        $npath = dirname($file);
                        if(file_exists($npath. '/' . $path)){
                            $path=$npath. '/' . $path;break;
                        }
                        if($file==$npath||$npath==''){
                            $path='';break;
                        }
                        $file=$npath;
                    }
                }
                if($path!=''){
                    $relpath=str_replace(PATH_ROOT,'',$path);
                    if($relpath===$path)
                    return '\\Pbb\\CorePbb::Include("'.$path.'");';
                    return '\\Pbb\\CorePbb::Include("'.$relpath.'",false);';
                }
            }
            return $match[0];
        },$mes);
        $isbase64=false;
        self::$ispic=false;
        if(!preg_match('@\.php$@',$file)){
            $mes=base64_encode($mes);
            if(preg_match('@\.(jpg|jpeg|png|gif|ico)@',$file)){$isbase64=false;self::$ispic=true;}
            else $isbase64=true;
        }
        else {
            $mes=preg_replace('@/\*[^\'"]*?\*/@s','',$mes);//替换/**/的注释内容
            $mes = str_replace('\\', '\\\\', $mes);
            $mes = str_replace('"', '\\"', $mes);
        }
        $len=strlen($mes);
        $start=0;
        $arr=[];
        while(true){
            if(count($arr)>self::$maxpartsize){echo($file."该文件过大忽略!");return '';}
            $partmes=substr($mes,$start,self::$maxsize);
            if($len-$start<self::$maxsize){//处理最后一次中文乱码问题
                $partmes=preg_replace_callback('/[\x{80}-\x{ff}]+$/',function($match){
                    return '".'.'base64_decode("'.base64_encode($match[0]).'")."';
                },$partmes);
            }
            else{//处理前面的中文乱码问题
                $partmes=preg_replace_callback('/[\x{80}-\x{ff}]+$/',function($match){
                    return '';
                },$partmes);
            }
            $start+=strlen($partmes);
            $partmes=preg_replace_callback('@([\x{80}-\x{ff}]{2,})([\\\]")@',function($match){//处理中文后跟着"问题
                 return '".'.'base64_decode("'.base64_encode($match[1]).'")."'.$match[2];
            },$partmes);
            if($start<$len){
                $arr[]='"'.$partmes.'".';
            }
            else
            {
                $arr[]='"'.$partmes.'"';
                break;
            }
        }
        if($isbase64)
        return 'base64_decode('.implode("\r\n",$arr).')';
        else
        return implode("\r\n",$arr);
    }
}