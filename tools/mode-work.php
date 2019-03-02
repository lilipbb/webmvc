<?php
include_once("base.php");
$rep(PATH_PHP,'/;?display_errors\s?=\s?O.*/i','display_errors = Off');
$rep(PATH_PHP,'@;?error_reporting =.*@','error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT& ~E_NOTICE&~E_WARNING');
//$rep(PATH_PUBLIC.'index.php','/DEBUG=true/i','DEBUG=false',false,false);