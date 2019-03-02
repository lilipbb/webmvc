<?php

use PbbHelpers\Util;
include_once ("base.php");
    include ("php2zephir.php");
if(!isset($isrc)) {
   if(count($args)>2){
       $cmd=$args[1];
       $name1=preg_replace('/\r|\n/','',$args[2]);
   }
   else{
       echo("你需要输入比如ex build name这样的指令");
       return;
   }
   if($name1==''){
       echo("你需要输入扩展名称");
   }
       global $modulepath, $extpath;
       switch (strtolower($cmd[0])) {
           case 't':
               if (file_exists($extpath)) Util::RmDir($extpath);
               Util::MkDir($extpath);
           case 'b':
           case 'u':
               if (!key_exists($name1, $modulepath)) {
                   foreach ($modulepath as $item => $v) {
                       if (strpos($item, $name1) === 0) {
                           $name1 = $item;
                           break;
                       }
                   }
               }
               if (!key_exists($name1, $modulepath)) {
                   echo("没有找到${name1}插件!");
                   fgets(STDIN);
                   return;
               } else {
                   $arr = [];
                   __getmodules($name1, $arr);
                   $arr = array_unique($arr);
               }
               if ($cmd[0] == 't') {
                   __buildprepare($arr);
               } else if ($cmd[0] == 'b') {
                   __buildstart($arr);
               }
               else {
                   $names=__getrealmodelnames($arr);
                   __uninstall($names);
               }
               break;
           default:
               echo("你的指令有错误");
               break;
       }
   }
   function __getmodules($name,&$arr){
       global $modulepath;
       if(key_exists($name,$modulepath)){
           $arr[]=$name;
           foreach ($modulepath[$name] as $item) {
               __getmodules($item,$arr);
           }
       }
   }
   function __buildprepare($modulenames)
   {
       global $modulepath, $extpath;
       $root = new PhpRoot();
       foreach ($modulenames as $name) {
           foreach ($modulepath[$name] as $item) {
               if (!key_exists($item, $modulepath)) {
                   $root->LoadDir($item,-1);
               }
           }
       }
       $root->Save($extpath);
   }
    function __getrealmodelnames($modulenames){
        global $modulepath;
        $root=new PhpRoot();
        foreach ($modulenames as $name) {
            foreach ($modulepath[$name] as $item) {
                if(!key_exists($item,$modulepath)){
                    $root->LoadDir($item,-1);
                }
            }
        }
        $names=$root->getAllModelsName();
        return $names;
    }
    function __buildstart($modulenames){
       global $extpath;
       $names=__getrealmodelnames($modulenames);
       $have=false;
        foreach ($names as $item) {//插件不存在的话先进行处理
            if(!file_exists($extpath.$item)){
                __buildprepare($modulenames);break;
            }
        }
       foreach ($names as $item) {
           if(file_exists($extpath.$item)){
               if(!$have)include('serverStop.php');
               $have=true;
               __build($item);
           }
           else{
               echo("{$item}插件不存在".NEWLINE);
           }
       }
       if($have)
       include('serverStart.php');
   }
   function __uninstall($names){
       global $rep;
       include("serverStop.php");
       foreach ($names as $item) {
           $rep(PATH_PHP,'/;?extension=php_'.$item.'.dll/',';extension=php_'.$item.'.dll');
       }
       include("serverStart.php");
   }
   function __init($name){
       global $extpath;
       exec('cd /d "'.$extpath.'"&%PHP_SDK%\bin\phpsdk_setvars'."&zephir init ".$name);
   }
   function __build($name){
       global $extpath;
       if(!file_exists($extpath.$name)){
           echo("没有该插件:".$name.NEWLINE);return;
       }
       system('cd /d "'.$extpath.$name.'"&%PHP_SDK%\bin\phpsdk_setvars'."&zephir build",$m);
       __move($name,$m);
   }
   function __move($name, $m)
   {
       global $extpath,$rep;
       if (file_exists($extpath . $name . '/ext/makefile')) {
           exec('cd /d "' . $extpath . $name . '/ext"&nmake clean');
       }
       if (file_exists($extpath . $name . '/compile.log')) {
           $str = file_get_contents($extpath . $name . '/compile.log');
           if (strpos($str, 'build complete') === false) {
               echo $str;
           }
       }
       $dll = $extpath . $name . '/ext/Release_TS/php_' . $name . '.dll';
       if (file_exists($dll)) {
           echo("已经完成编译".NEWLINE);
           $phppath = dirname(PATH_PHP) . '/ext/';
           if (file_exists($phppath)) {
               copy($dll, $phppath . 'php_' . $name . '.dll');
               $rep(PATH_PHP,'/;?extension=php_'.$name.'.dll/','extension=php_'.$name.'.dll',true);
           } else {
               echo("没有找到插件路径".NEWLINE);
           }
       } else {
           echo("编译{$name}失败!".NEWLINE);
           print_r($m);
           fgets(STDIN);
       }
   }