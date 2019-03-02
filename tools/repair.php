<?php
use PbbHelpers\Util;
include_once ("base.php");
   if(count($args)>1){
       $name1=preg_replace('/\r|\n/','',$args[1]).'/';
   }
   else{
       $name1='';
   }
$path=PATH_STATIC.$name1;
if(!file_exists($path)){
       echo($path."该文件夹不存在!".NEWLINE);
       return;
}
$filenames=Util::getFiles($path,-1,function($name){
    return true;
    return preg_match('/\.(html|htm|xhtml|php)$/',$name);
});
foreach($filenames as $filename){
    $oldmes=file_get_contents($filename);
    $nowpath=dirname($filename).'/';
    $fixfun=function ($mes)use($nowpath){
        $nmes=preg_replace('/^\.\//','',trim($mes));
        if(file_exists($nowpath.$nmes)&&is_file($nowpath.$nmes)){
            $nmes='"//'.WEB_NAME.'/'.str_replace(PATH_PUBLIC,'',$nowpath).$nmes.'"';
        }
        else{
//            if(strpos($nmes,'//')===false)
//            echo($nmes.'改文件不存在!'.NEWLINE);
            return '';
        }
        $nmes=preg_replace_callback('@/[^/]+/\.\./@',function($match){
            return '/';
        },$nmes);
        return $nmes;
    };
    $mes=preg_replace_callback('@(href|src)\s*=\s*[\'"](.*?)[\'"]@',function($match)use($filename,$fixfun){
         $mes=$fixfun($match[2]);
         if($mes!='')
             return $match[1].'='.$mes;
         return $match[0];
    },$oldmes);
    $mes=preg_replace_callback('@:\s*url\s*\((.*?)\)@',function($match)use($filename,$fixfun){
        $mes=$fixfun(preg_replace('@^[\'"]|[\'"]$@','',$match[1]));
        if($mes!='')
            return ':url('.$mes.')';
        return $match[0];
    },$mes);
    if($oldmes!==$mes)
    file_put_contents($filename,$mes);
}

