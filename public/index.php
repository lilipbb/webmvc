<?php
use \Pbb\CorePbb;
set_time_limit(1000);
define("PBB_MODULE",extension_loaded('pbb'));
include('../config/config.php');
if(!PBB_MODULE) include("../core/pbb/pbb.php");
function _include($__mes__,$_this=null){return include('str://'.$__mes__);}
function _echo($mes){if($mes===null)return;$type=gettype($mes);if($type=="array"||$type=="object")echo str_replace('"',"'",json_encode($mes));else{echo $mes;}};
if(COMPOSER_LOAD)
require_once("../core/pbbcomposer/vendor/autoload.php");
else spl_autoload_register('\Pbb\CorePbb::loadclass');
stream_wrapper_register('str','\Pbb\StrStream');
CorePbb::dispatch();
stream_wrapper_unregister('str');