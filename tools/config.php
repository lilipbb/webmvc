<?php
if($win) {
//php安装文件夹位置
    define("PATH_PHP", __DIR__.'/../../../phpwamp/server/php-7.0.1/php.ini');
//apache安装文件夹位置
    define("PATH_APACHE", __DIR__.'/../../../phpwamp/server/Apache2.4/');
//httpd.conf文件位置
    define("PATH_HTTPD", PATH_APACHE . 'conf/httpd-phpwamp.conf');
//apache服务器名称
    $apacheServerName = '.phpwamp_apache2.4';
    //apache服务器名称
    $mysqlServerName = 'mysqlpbb';
    //npm全局安装的目录
    $npmPath='C:/Users/Administrator/AppData/Roaming/npm/';
}
else{
    define("PATH_PHP", '/usr/local/php7/lib/php.ini');
//apache安装文件夹位置
    define("PATH_APACHE", '/usr/local/apache/');
//httpd.conf文件位置
    define("PATH_HTTPD", PATH_APACHE . 'conf/httpd.conf');
}
//模块的存放路径
$extpath=str_replace('\\','/',PATH_ROOT)."tools/ext/";
//制作成模块的目录,模块简称=>[完整路径|模块简称],有继承关系的放在一个数组里
$modulepath=[
    'all'=>['core','app','test'],
    'core'=>['pbb','locker','helpers'],
    'pbb'=>[PATH_CORE.'pbb'],
    'locker'=>[PATH_CORE.'pbblocker'],
    'helpers'=>[PATH_CORE.'pbbhelpers'],
    'app'=>['controls','model','tools'],
    'controls'=>[PATH_APP.'controls',PATH_CORE.'pbbcontrol'],//,'tools'
    'model'=>[PATH_CORE.'pbbdb',PATH_APP.'model'],
    'tools'=>[PATH_APP.'tools'],
    'test'=>[PATH_APP.'test'],
];
//制作成静态资源的目录
//$rcsourcepath=[
//    PATH_CORE.'pbbother',PATH_ROOT.'config',
//    PATH_PUBLIC
//];