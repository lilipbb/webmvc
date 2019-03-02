<?php
use PbbHelpers\Util;
include_once ("base.php");
   echo("开始进行js6和scss文件的监控!".NEWLINE);
   $js6path=PATH_PUBLIC.'js6/';
   $jspath=PATH_PUBLIC.'js/';
   $scsspath=PATH_PUBLIC.'scss/';
   $csspath=PATH_PUBLIC.'css/';
   $jstemppath=$npmPath."node_modules/babel-cli/js6/";
   Util::MkDir($js6path);
   Util::MkDir($scsspath);
   class __WatchFile{
      private static $ins;
      private $arr;
      public static function Ins(){
          if(self::$ins==null)self::$ins=new self();
          return self::$ins;
      }
      private function __construct()
      {
          $this->arr=[];
      }
       private function get($name)
      {
           $name='a'.md5($name);
           if(key_exists($name,$this->arr))
               return $this->arr[$name];
           return '';
      }
       private function set($name,$value){
          $name='a'.md5($name);
          $this->arr[$name]=$value;
      }
      public function watchdir($src,$dst,$srcext,$dstext,callable $resultfun){
           $first=$this->get('first'.$src);
           $oldtimes=$this->get('time'.$src);
           if($first===''){$first=true;$oldtimes=[];}
           $files=Util::getFiles($src,-1);
           $newtimes=[];
           $changefiles=[];
           foreach ($files as $file) {
               if(!preg_match('@'.$srcext.'$@',$file))continue;
               $newtimes[$file]=filemtime($file);
               if(key_exists($file,$oldtimes)){
                   $ot=$oldtimes[$file];
                   unset($oldtimes[$file]);
                   if(filemtime($file)==$ot)continue;
               }
               $changefiles[]=$file;
           }
           $srctodst=function ($path)use($src,$dst,$srcext,$dstext){
               $dstpath=preg_replace('@^'.$src.'@',$dst,$path);
               $dstpath=preg_replace('@'.$srcext.'$@',$dstext,$dstpath);
               return $dstpath;
           };
           foreach ($oldtimes as $p=>$t) {
               $dstpath=$srctodst($p);
               if(file_exists($dstpath))unlink($dstpath);
           }
           if(count($changefiles)>0&&!$first){
               $arr=[];
               foreach ($changefiles as $changefile) {
                   $arr[$changefile]=$srctodst($changefile);
               }
               if($resultfun)$resultfun($arr);
               echo("\7转换完成!".NEWLINE);
           }
          $this->set('first'.$src,false);
          $this->set('time'.$src,$newtimes);
       }
   }

   while(true){
       sleep(1);
       __WatchFile::Ins()->watchdir($js6path,$jspath,'js','js',function($changefiles){
           global $jstemppath,$js6path,$jspath;
           Util::RmDir($jstemppath);
           Util::MkDir($jstemppath);
           copy("./.babelrc",$jstemppath.'.babelrc');
           foreach ($changefiles as $changefile=>$dstfile) {
               $newpath=str_replace($js6path,'',$changefile);
               Util::MkDir($jstemppath.dirname($newpath));
               copy($changefile,$jstemppath.$newpath);
               $changefile=basename($changefile);
               echo("{$changefile}文件进行转换!".NEWLINE);
           }
           exec("babel $jstemppath -d $jspath",$mes);
       });
       __WatchFile::Ins()->watchdir($scsspath,$csspath,'scss','css',function($changefiles){
           foreach ($changefiles as $changefile=>$dstfile) {
               echo basename($changefile)."文件进行转换.".NEWLINE;
               Util::MkDir(dirname($dstfile));
               exec(PATH_ROOT.'core'.'/libsass/'.'sassc.exe '.'-t expanded "'.$changefile.'" "'.$dstfile.'"');
           }
       });
   }