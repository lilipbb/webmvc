<?php
namespace PbbOther\Helpers;
use Pbb\CorePbb;
class path{
private static function GetAllfd($path,&$arr,$recursion,callable $fliter=null,$isfile=true,$isdir=true)
{
if (substr($path,-1) != '/') $path .= '/';
$dir = opendir($path);
$file = readdir($dir);
while ($file) {
if ($file != '.' && $file != '..') {
$all = $path . $file;
$thisisdir = is_dir($all);
$ok=($fliter==null);
$ok=$ok||$fliter($file,$path);
if ($thisisdir) {
if ($isdir&&$ok)
$arr[] = $all;
} else
{
if($isfile&&$ok)
$arr[] = $all;
}
if ($recursion!=0 && $thisisdir) {
self::GetAllfd($all . '/', $arr, $recursion-1,$fliter,$isfile,$isdir);
}
}
    $file = readdir($dir);
}
}
public static function GetAll($path,$recursion,callable $fliter=null){
if(!is_dir($path)){
    CorePbb::Error($path."该路径不存在",false);
}
$arr=[];
self::GetAllfd($path,$arr,$recursion,$fliter);
return $arr;
}
public static function GetFiles($path,$recursion,callable $fliter=null){
if(!is_dir($path)){
    CorePbb::Error($path."该路径不存在",false);
}
$arr=[];
self::GetAllfd($path,$arr,$recursion,$fliter,true,false);
return $arr;
}
public static function GetDirs($path,$recursion,callable $fliter=null){
if(!is_dir($path)){
    CorePbb::Error($path."该路径不存在",false);
}
$arr=[];
self::GetAllfd($path,$arr,$recursion,$fliter,false,true);
return $arr;
}
}