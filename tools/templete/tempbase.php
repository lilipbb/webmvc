<?php
namespace Pbb\Templete;
use PbbHelpers\Util;

abstract class TempBase{
    public static function Load($name,$path){
        $files=Util::getFiles(__DIR__,0,function($pname)use($name){
              if($pname=='tempbase.php')return false;
              return preg_match('@^'.$name.'@',$pname);
        });
        if(count($files)>0){
             include($files[0]);
             $name='\\'.__NAMESPACE__.'\\'.basename($files[0],'.php');
             echo($name);
             $obj=new $name();
             $arr=preg_split('@[\\\/]+@',$path);
             $filename=end($arr);
             if(strpos($filename,'.')===false)$filename.=$obj->GetExt();
             unset($arr[count($arr)-1]);
             $path=$obj->GetBasePath()."/".implode('/',$arr).'/';
             Util::MkDir($path);
             if(!file_exists($path.$filename)){
                 $namespace=implode('\\',$arr);
                 $mes=$obj->GetTemplete(ucfirst(explode('.',$filename)[0]),ucfirst($namespace));
                 file_put_contents($path.$filename,trim($mes));
             }
             else{
                 return "{$path}{$filename}改文件已经存在!";
             }
        }
        else{
            return false;
        }
        return true;
    }
    public abstract function GetBasePath();
    public abstract function GetTemplete($filename,$namespace);
    public function GetExt(){
        return '.php';
    }
}