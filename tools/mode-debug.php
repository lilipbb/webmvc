<?php
include_once("base.php");
$rep(PATH_PHP,'/;?display_errors\s?=\s?O.*/i','display_errors = On');
$rep(PATH_PHP,'@;?error_reporting =.*@','error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT');
//$rep(PATH_PUBLIC.'index.php','/DEBUG=false/i','DEBUG=true',false,false);