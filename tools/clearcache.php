<?php
use PbbHelpers\Util;
include_once("base.php");
foreach (Util::getDirs(PATH_ROOT,100) as $dir){
    if(preg_match('@[/]tmp[/]@',$dir)){
        foreach (Util::getFiles($dir,100) as $filename){
            unlink($filename);
        }
    }
}