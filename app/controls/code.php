<?php
namespace Controls;
use PbbOther\Helpers\ImageSplit_Code;

class code{
    public function codeimg($args){
        ImageSplit_Code::getimage(4,3)->show();
    }
    public function codemes(){
        echo ImageSplit_Code::getmessage();
    }
    public function codecheck($num){
        if(ImageSplit_Code::isok($num)){
            echo 'ok';
        }
        else echo 'false';
    }
    public function aaa($a){
        return $a;
    }
}