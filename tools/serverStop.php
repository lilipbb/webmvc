<?php
include_once('base.php');
echo("服务器开始关闭!".NEWLINE);
global $win,$apacheServerName;
if($win) {
    system("net stop ".$apacheServerName, $mes);
}
else{
    system("/usr/local/apache/bin/apachectl stop",$mes);
}
include_once ("clearcache.php");
