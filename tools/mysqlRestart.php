<?php
include_once('base.php');
if($win) {
    system("net stop $mysqlServerName", $mes);
    system("net start $mysqlServerName", $mes);
}
else{
    system("/data/3306/mysql restart",$mes);
}