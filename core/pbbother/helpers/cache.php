<?php
namespace PbbOther\Helpers;
use Pbb\CorePbb;
class Cache{
    private static $redis;
    public static function GetRedis():\Redis{
        if(self::$redis===null){
            self::$redis=new \Redis();
            if(!self::$redis->pconnect('127.0.0.1')){
                CorePbb::Error("没有连接上Redis数据库!".NEWLINE,false);
            }
        }
        return self::$redis;
    }
    private static function isCallable($obj){
        if(gettype($obj)=='object'){
            $c=get_class($obj);
            if($c=='Closure'||strpos($c,'Closure__')!==false)
                return true;
        }
        return false;
    }
    public static function Have($name):bool {
        return self::GetRedis()->exists($name);
    }
    public static function Set($name,$value,$outtime=0){
        if(self::isCallable($value))
            $v=$value();
        else $v=$value;
        $redis=self::GetRedis();
        if($redis->set($name,$v)){
            if($outtime>0)$redis->expire($name,$outtime);
            return strval($v);
        }
        return false;
    }
    public static function Get($name,$normal='',$outtime=0){
        $redis=self::GetRedis();
        if($redis->exists($name)){
            return $redis->get($name);
        }
        else{
            return self::Set($name,$normal,$outtime);
        }
    }
    public static function Delete($name){
        self::GetRedis()->delete($name);
    }
    public static function Pull($name){
        $r=self::GetRedis()->get($name);
        if($r)
            self::GetRedis()->delete($name);
        return $r;
    }
    public static function Increment($name,int $normal=0){
        $redis=self::GetRedis();
        $r=$redis->incr($name);
        if($r!==false)
            return $r;
        $normal++;
        $redis->set($name,$normal);
        return $normal;
    }
    public static function Decrement($name,int $normal=0){
        $redis=self::GetRedis();
        $r=$redis->decr($name);
        if($r!==false)
            return $r;
        $normal--;
        $redis->set($name,$normal);
        return $normal;
    }
    public static function SetTimeout($name,$outtime):bool {
        return self::GetRedis()->expire($name,$outtime);
    }
}