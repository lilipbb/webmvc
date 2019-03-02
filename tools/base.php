<?php
$_SERVER['DOCUMENT_ROOT']=str_replace('tools','',__DIR__).'public/';
require_once(__DIR__.'/../core/pbb/pbb.php');
require_once(__DIR__.'/../config/config.php');
function _include($mes,$_this=null){return include('str://'.$mes);}
spl_autoload_register('\Pbb\CorePbb::loadclass');
stream_wrapper_register('str','Pbb\StrStream');
//��ַ
$win=PHP_OS[0]=='W';
include(__DIR__."/config.php");
if(!file_exists(PATH_PHP)){file_put_contents(PATH_PHP,'');}
$rep=function($file,$src,$dst,$must=false,$backup=true){
    if(file_exists($file)){
        $mes=file_get_contents($file);
        if($backup) file_put_contents($file.'-backup',$mes);
        $mes1=preg_replace($src,$dst,$mes,1);
        if($mes1==''){echo("php.ini�޸�ʧ��".NEWLINE);return;}
        if($mes==$mes1){
            if($must&&strpos($mes1,$dst)===false)
            $mes1.=NEWLINE.$dst;
            else return;
        }
        file_put_contents($file,$mes1);
    }
};