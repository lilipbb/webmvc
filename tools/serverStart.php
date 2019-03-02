<?php
include_once('base.php');
echo("服务器开始启动!".NEWLINE);
global $win,$apacheServerName;
if($win) {
    system("net start $apacheServerName", $mes);
}
else{
    system("/usr/local/apache/bin/apachectl start",$mes);
}
