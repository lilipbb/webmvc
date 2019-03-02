<?php
namespace Test{
    class testAll{
       public static function Test(){
           TestInlineFun::InlineFun();
           TestInlineFun::InlineFun1();
           TestInlineFun::InlineFun2();
           TestInlineFun::InlineFun3();
           TestString::Test();
           TestString::Test1();
           RefCall::RefTest();
           TestClass::Test();
           TestCondition::Test();
           tryTest::Test();
       }
       public static function Arr(){
           return ['person'=>'彭滨滨&nbsp;&nbsp;29岁','mobile'=>'13262929683','mail'=>'pbb@yhydy.cn'];
       }
    }
}