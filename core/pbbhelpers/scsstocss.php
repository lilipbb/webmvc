<?php
namespace PbbHelpers;
use Controls\Pbbcontrol\ControlBase;

class ScssToCss{
    public static function Begin($srcpath, $dstpath){
        $scssmes=file_get_contents($srcpath);
        self::BeginStr($scssmes,$srcpath,$dstpath);
    }
    public static function BeginStr($str, $srcpath, $dstpath, $control=null){
        if($control==null)$control=new ControlBase('','',LANG_NORMAL);
        $importpath=[];
        $str=preg_replace_callback('/@import\s*([^<>; ]*)/',function($match)use(&$importpath){
            $match[1]=str_replace(['\'','"','(',')'],'',$match[1]);
            if(strpos($match[1],'.')===false)$match[1].='.scss';
            else $match[1]=str_replace('.css','.scss',$match[1]);
            if(in_array($match[1],$importpath))return '';
            else $importpath[]=$match[1];
            $match[1]=trim($match[1]);
            if(file_exists(PATH_PUBLIC.'scss/'.$match[1])){
                return '@import \''.strtolower(substr(PATH_PUBLIC,0,1)).substr(PATH_PUBLIC,1).'scss/'.$match[1].'\'';}
            return $match[0];
        },$str);
        $str=preg_replace_callback('@:\s*url\s*([^<>; ]*)@',function($match)use($control){//对url地址进行转换
             $src=preg_replace('@[\'"()]@','',$match[1]);
             $src=trim($src);
             $src=$control->getAssesAbsUrl(PATH_IMAGES,$src);
            return ":url({$src})";
        },$str);
        file_put_contents($srcpath,$str);
        $iswin=substr(PHP_OS,0,1)=='W';
        exec(PATH_CORE.'libsass/'.($iswin?'sassc.exe ':'sassc ').'-t '.(DEBUG?'expanded ':'compressed ').$srcpath.' '.$dstpath);
    }
}