<?php
namespace PbbLocker;
use Pbb\CorePbb;

class Storage{
    private static function GetPath(){
        return PATH_CORE.'pbblocker/storage/';
    }
    public static function Delete(string $name){
        if(self::Have($name)){
            unlink(self::GetPath().$name);
            return true;
        }
            return false;
    }
    public static function Have(string $name){
        return file_exists(self::GetPath().$name);
    }
    public static function UpdateObj(string $name,callable $update){
        $file=null;
        try {
            $file = fopen(self::GetPath() . $name, 'a+');
            $count = 5;
            while (!flock($file, LOCK_EX | LOCK_NB)) {
                if (--$count == 0) {
                    return false;
                }
                usleep(rand(100000, 300000));
            }
            fseek($file,0,SEEK_SET);
            $mes = fgets($file);
            if($mes)
            $obj=json_decode($mes);
            else $obj=null;
            $upobj=$update($obj);
            if($upobj!==null){
                $mes=json_encode($upobj);
                if(strlen($mes)>0){
                    ftruncate($file,0);
                    rewind($file);
                    fwrite($file,$mes);
                    return $upobj;
                }
            }
        }
        catch (\Exception $e){
            CorePbb::Log($e);
        }
        finally{
            if($file!=null) {
                flock($file, LOCK_UN);
                fclose($file);
                $file=null;
            }
        }
        return null;
    }
    public static function GetObj(string $name){
        $mes=self::GetString($name);
        if($mes===false)return false;
        return json_decode($mes);
    }
    public static function GetString(string $name){
        if(!file_exists(self::GetPath().$name))return '';
        $file=null; $mes=null;
        try {
            $file=fopen(self::GetPath().$name,'r');
            $count=3;
            while (!flock($file, LOCK_SH | LOCK_NB)) {
                if (--$count == 0) {
                    return false;
                }
                usleep(rand(100000,300000));
            }
            $mes=fgets($file);
        }
        catch (\Exception $e){
            CorePbb::Log($e);
            $mes=false;
        }
        finally{
            if($file!=null) {
                flock($file, LOCK_UN);
                fclose($file);
                $file=null;
            }
        }
        return $mes;
    }
}