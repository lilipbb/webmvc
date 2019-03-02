<?php

use PbbHelpers\Util;
include_once('base.php');
{
    $rset=false;
    if(WEB_NAME!=''){
        echo("当前网址是：".WEB_NAME.",需要设置吗 类似 www.yhydy.cn Y or N:");
        $g=fgets(STDIN);
        if(strtolower($g)[0]=='y')
            $rset=true;
    }
    else{
        echo("当前网址还未设置:请输入网址：类似 www.yhydy.cn ");
        $rset=true;
    }
     if($rset){
           while(true) {
               echo("请输入网址：");
               $rset = fgets(STDIN);
               $rset=str_replace(["\r","\n"],'',$rset);
               if($rset!='') {
                   $rep(PATH_ROOT . 'config/config.php', '/WEB_NAME.*/', 'WEB_NAME=\'' . $rset. '\';', false, false);
                   break;
               }
           }
         $webname=$rset;
     }
       else
        $webname=WEB_NAME;
}
$rep(PATH_PHP,'/;?display_errors\s?=\s?O.*/i','display_errors = Off');
echo(NEWLINE."是否打开图片防盗链?Y or N...:");
$hotlink=fgets(STDIN);
if($hotlink!=''&&strtolower($hotlink[0])=='y')$hotlink='';
else $hotlink='#';
echo(NEWLINE."是否打开SSH?Y or N...:");
$openssl=fgets(STDIN);
if(isset($openssl)&&preg_match('/y/i',$openssl)){
    if(!file_exists(PATH_ROOT.'ssl')){echo 'ssl director no exists';}
    else{
        $sslmes='SSLEngine on'.NEWLINE;
        $sslok=0;
        foreach(Util::getFiles(PATH_ROOT.'ssl') as $sslname){
            $sslname=str_replace('\\','/',$sslname);
             if(basename($sslname)[0]=='1') {$sslmes.='SSLCertificateChainFile '.$sslname.NEWLINE;$sslok++;}
             else if(basename($sslname)[0]=='2') {$sslmes.='SSLCertificateFile '.$sslname.NEWLINE;$sslok++;}
             else if(basename($sslname)[0]=='3') {$sslmes.='SSLCertificateKeyFile '.$sslname.NEWLINE;$sslok++;}
        }
    }
    if($sslok==3){
           $httpsslconf=PATH_APACHE.'conf/extra/httpd-ssl.conf';
           $sslconf=file_get_contents($httpsslconf);
        $sslconf=preg_replace_callback('/<VirtualHost.+?<\/VirtualHost>/s',function ($match)use($hotlink){
               global $webname;
               $path=str_replace(["tools",'\\'],['','/'],getcwd()).'public/';
               $simplewebname=str_replace('www.','',$webname);
               global $sslmes;
               return <<<EOT
<VirtualHost $webname:443>
    ServerName $webname
    #ServerAlias $simplewebname
    DocumentRoot "$path"
  <Directory "$path">
      Options FollowSymLinks
      AllowOverride None
      Require all granted
      RewriteEngine On
#图片盗链设置
      {$hotlink}RewriteCond %{HTTP_REFERER} !$simplewebname [NC]
      {$hotlink}RewriteRule \.(jpg|png|gif|mp4|flv)$ /hotlink [R,L]
#入口除了文件类型外其它都重定向到index.php
      #RewriteCond %{REQUEST_FILENAME} !-d
      RewriteCond %{REQUEST_FILENAME} !-f
      RewriteRule ^(.*)$ index.php
  </Directory>
  $sslmes
</VirtualHost>
EOT;
           },$sslconf,1);
           file_put_contents($httpsslconf,$sslconf);
    }
    else{
           echo 'ssl requires 3 files,1XXX,2XXX,3XXX';
    }
}
$sslok=isset($sslok)&&$sslok==3;
$apacheini=file_get_contents(PATH_HTTPD);
file_put_contents(PATH_HTTPD.'-backup',$apacheini);
$abname="abtest.bat";
if(file_exists($abname)){
$ab=file_get_contents($abname);
$ab=preg_replace_callback('/webname=.+/',function ($match){
    return 'webname=http://'.WEB_NAME.'/'.NEWLINE;
},$ab,1);
file_put_contents($abname,$ab);
}
if(strpos($apacheini,'VirtualHost _default_:80')===false)$apacheini.='<VirtualHost _default_:80> </VirtualHost>';
$apacheini=preg_replace_callback('/<VirtualHost _default_:80>.+?<\/VirtualHost>/s',function ($match)use($hotlink){
    $webname=WEB_NAME;
    global $sslok;
    $path=str_replace(["tools",'\\'],['','/'],getcwd()).'public/';
    $simplewebname=str_replace('www.','',$webname);
    $redire443='';
    if($sslok) {
        echo("强制开启Https?Y or N:");
        if(preg_match('/y/i',fgets(STDIN)))
        $redire443 = <<<EOT
    RewriteCond %{SERVER_PORT} 80
    RewriteRule ^(.*)$ https://$webname/$1 [R=302,L]
EOT;
    }
    $ns=<<<ETO
<VirtualHost _default_:80>
    ServerName $webname
    #ServerAlias $simplewebname
    DocumentRoot "$path"
  <Directory "$path">
      Options FollowSymLinks
      AllowOverride None
      Require all granted
      RewriteEngine On
      $redire443
#图片盗链设置
      {$hotlink}RewriteCond %{HTTP_REFERER} !$simplewebname [NC]
      {$hotlink}RewriteRule \.(jpg|png|gif|mp4|flv)$ /hotlink [R,L]
#入口除了文件类型外其它都重定向到index.php
      #RewriteCond %{REQUEST_FILENAME} !-d
      RewriteCond %{REQUEST_FILENAME} !-f
      RewriteRule ^(.*)$ index.php
  </Directory>
</VirtualHost>
ETO;
return $ns;
},$apacheini,1);
if($sslok){
    $apacheini=str_replace('#LoadModule ssl_module modules/mod_ssl.so','LoadModule ssl_module modules/mod_ssl.so',$apacheini);
    $apacheini=str_replace('#Include conf/extra/httpd-ssl.conf','Include conf/extra/httpd-ssl.conf',$apacheini);
    $apacheini=str_replace('#LoadModule socache_shmcb_module modules/mod_socache_shmcb.so','LoadModule socache_shmcb_module modules/mod_socache_shmcb.so',$apacheini);
}
else{
    $apacheini=str_replace('LoadModule ssl_module modules/mod_ssl.so','#LoadModule ssl_module modules/mod_ssl.so',$apacheini);
    $apacheini=str_replace('Include conf/extra/httpd-ssl.conf','#Include conf/extra/httpd-ssl.conf',$apacheini);
    $apacheini=str_replace('LoadModule socache_shmcb_module modules/mod_socache_shmcb.so','#LoadModule socache_shmcb_module modules/mod_socache_shmcb.so',$apacheini);
}
file_put_contents(PATH_HTTPD,$apacheini);
include('serverStop.php');
include('serverStart.php');
print_r($mes);