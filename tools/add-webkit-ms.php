<?php
use PbbHelpers\Util;
include_once ('base.php');
foreach(Util::getFiles(PATH_CSS,-1) as $filename){
exec('postcss'.' -u autoprefixer -o '.$filename.' '.$filename);
$cssmes=file_get_contents($filename);
$cssmes=preg_replace_callback('@/\*.+?\*/@',function($match){
    return '';
},$cssmes);
file_put_contents($filename,$cssmes);
}