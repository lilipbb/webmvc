<?php
namespace PbbOther\Helpers;
use Pbb\CorePbb;
class Session{
    private static $first=true;
    private static $name;
    private static $nameh;
    private static function session_open($name){
        if(self::$first){
            self::$first=false;
            session_start();
        }
        $name=trim($name);
        if(preg_match('@^([^\[\]]+)\[(.*)\]$@',$name,$m)) {
            self::$name = $m[1];
            self::$nameh=$m[2];
        }
        else{
            self::$name = $name;
            self::$nameh=null;
        }
    }
    public static function Get($name){
        self::session_open($name);
        if(!isset($_SESSION[self::$name]))return null;
        if(isset($_SESSION[self::$name.'_time'])){
            if(time()>$_SESSION[self::$name.'_time']){
                self::Del($name);
                return null;
            }
        }
        else if(isset($_SESSION['time_out'])){
            if(time()>$_SESSION['time_out']){
                session_destroy();
                return null;
            }
        }
        if(self::$nameh){
            return $_SESSION[self::$name][self::$nameh];
        }
        return $_SESSION[self::$name];
    }
    public static function Have($name){
        return self::Get($name)!==null;
    }
    public static function Set($name,$value,$outtime=0,$global=true){
        if($value===null){ self::Del($name);return;}
        if(!$name){CorePbb::Error("session的键不能为空",false);}
        self::session_open($name);
        if(self::$nameh===null){
            $_SESSION[self::$name]=$value;
        }
        else{
            if(isset($_SESSION[self::$name])&&gettype($_SESSION[self::$name])!='array'){
                $_SESSION[self::$name]=[];
            }
            if(self::$nameh===''){
                $_SESSION[self::$name][]=$value;
            }
            else
                $_SESSION[self::$name][self::$nameh]=$value;
        }
        if($outtime!=0){
            if($outtime<0)$outtime=0xffffffff;
            else $outtime=time()+$outtime;
            if($global){
                $_SESSION['time_out']=$outtime;
            }
            else $_SESSION[self::$name.'_time']=$outtime;
        }
    }
    public static function Del($name){
        self::session_open($name);
        if(self::$nameh===null||self::$nameh===''){
            unset($_SESSION[self::$name]);
            unset($_SESSION[self::$name.'_time']);
        }
        else{
            unset($_SESSION[self::$name][self::$nameh]);
        }
    }
    public static function GetArray(){
        self::session_open('');
        return $_SESSION;
    }
    public static function SetArray($arr){
        self::session_open('');
        if(gettype($arr)=='array')
            $_SESSION=$arr;
        else CorePbb::Error("设置session必须是数组!",false);
    }
}