<?php
if(!COMPOSER_LOAD)return;
$fun=function (){
    $composerpath=PATH_CORE.'pbbcomposer/';
    $files=\PbbHelpers\Util::getFiles(PATH_CORE,-1,function($name){return substr($name,-4)=='.php';});
    $files1=\PbbHelpers\Util::getFiles(PATH_APP,-1,function($name){return substr($name,-4)=='.php';});
    $files=array_merge($files,$files1);
    $arr=[];
    foreach($files as $file){
        if(strpos($file,$composerpath)!==false)continue;
        $mes=file_get_contents($file);
        $path=dirname($file);
        preg_replace_callback('@namespace ([\w_\\\]+)\s*[;\{]@',function($match)use(&$arr,$path){
            $match[1].='\\';
            if(key_exists($match[1],$arr)){
                $arrpaths=$arr[$match[1]];
                if(!in_array($path,$arrpaths))
                    $arr[$match[1]][]=$path;
            }
            else $arr[$match[1]]=[$path];
        },$mes);
    }
    if(file_exists($composerpath.'composer.json')){
        $obj=json_decode(file_get_contents($composerpath.'composer.json'),true);
    }
    else $obj=(object)null;
    if(isset($obj['autoload']['psr-4'])){
        if(json_encode($obj['autoload']['psr-4'])==json_encode($arr))
            return;
    }
    $obj['autoload']['psr-4']=$arr;
    file_put_contents($composerpath.'composer.json',json_encode($obj));
    exec("cd /d\"{$composerpath}\"&composer dump-autoload");
    echo("composer自动加载处理完成!".NEWLINE);
};
$fun();

