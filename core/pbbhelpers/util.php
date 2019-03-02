<?php
namespace PbbHelpers;
use Pbb\CorePbb;
use PbbOther\Sms\SmsSingleSender;
use PbbOther\Helpers\path;

class Util{
    /**
     * @param $path \当该目录不存在就递归创建
     */
    public static function MkDir($path){
        if(!file_exists($path))mkdir($path,0744,true);
    }

    /**
     * @param $path \删除该目录及其下所有文件
     */
    public static function RmDir($path){
        if(file_exists($path))exec('rd /s/q "'.$path.'"');
    }

    public static function DownLoad($filepath,$showname=''){
        if(!file_exists($filepath)){
            CorePbb::Error($filepath."路径文件不存在",false);
            return;
        }
        ob_clean();
        $ne=explode('.',$showname);
        if(count($ne)>1){
            header("Content-Type:application/".$ne[count($ne)-1]);
        }
        header("Content-Disposition:attachment;filename=".$showname);
        header("Content-Length:".filesize($filepath));
        readfile($filepath);
    }
    public static function getAllPathsAndFiles($path,$recursionCount=0,$fliter=null){
        return path::GetAll($path,$recursionCount,$fliter);
    }
    public static function getFiles($path,$recursionCount=0,$fliter=null){
        return path::GetFiles($path,$recursionCount,$fliter);
    }
    public static function getDirs($path,$recursionCount=0,$fliter=null){
        return path::GetDirs($path,$recursionCount,$fliter);
    }
    public static function sendSms(){
        $sms=new SmsSingleSender("","");
    }
    public static function getDom($str){
        $doc=\phpQuery::newDocument($str);
        return $doc;
    }
}