<?php
namespace Controls;
use Controls\Pbbcontrol\ControlBase;
use PbbHelpers\Util;
use Test\RefCall;
use Test\Test;
use Test\testAll;
use Test\TestClass;
use Test\TestCondition;
use Test\TestInlineFun;
use Test\TestRef;
use Test\TestString;
use Test\tryTest;

class Index extends ControlBase {
    public function show()
    {
       $this->display();
    }
    public function learn(){
        $this->a=time();
        $this->display("learn");
    }
    protected function getx(){
        return 400;
    }
    protected function gety(){
        return 400;
    }
    public function bbb($a=123){
        return $a;
    }
    protected function cc($c='hello'){
         return $c;
    }
    public function getimage(){
         $arr=[];
         Util::getFiles(PATH_PUBLIC.'images',-1,function($name)use(&$arr){
             $arr[]=$name;
         }
         );
         return $arr;
    }
}