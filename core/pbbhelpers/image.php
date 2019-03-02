<?php
namespace PbbHelpers;
use Pbb\CorePbb;

class Image{
    /**
     * @param $name \给用户显示图片
     */
    public static function ShowImg($name){
        if(file_exists(PATH_IMAGES.$name)){
            ob_clean();
            if(strpos($name,'png')===false){
                header('Content-Type:Image/jpeg');
                $img=imagecreatefromjpeg(PATH_IMAGES.$name);
                imagejpeg($img);
            }
            else{
                header('Content-Type:Image/png');
                $img=imagecreatefrompng(PATH_IMAGES.$name);
                imagesavealpha($img,true);
                imagepng($img);
            }
            imagedestroy($img);
            CorePbb::Error('',false);
        }
        else{
            CorePbb::Error($name.'的图片不存在');
        }
    }
}