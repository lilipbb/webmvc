"use strict";
require("./main");
var fs=require("./fsync");
var staticobj={};
class __WatchFile{
    get($name)
    {
        $name='a'+md5($name);
        if(isset(staticobj[$name]))
            return staticobj[$name];
        return '';
    }
    set($name,$value){
        $name='a'+md5($name);
        staticobj[$name]=$value;
    }
    watchdir($src,$dst,$srcext,$dstext,$resultfun,$deleteDstOld){
        var $srctodst=function ($path){
            var $dstpath=$path.replace(new RegExp('^'+$src),$dst);
            var $dstpath=$dstpath.replace(new RegExp($srcext+'$'),$dstext);
            return $dstpath;
        };
     $resultfun=$resultfun||null;
    var $first=this.get('first'+$src);
    var $oldtimes=this.get('time'+$src);
    if($first===''){$first=true;$oldtimes=[];}
    var $files=fs.getFileNames($src,-1);
    var $newtimes=[];
    var $changefiles=[];
    for(var $file in $files) {
        $file=$files[$file];
    if(!$file.match(new RegExp($srcext+'$')))continue;
    $newtimes[$file]=fs.mTime($file);
    var ok=true;
    if($oldtimes.hasOwnProperty($file)){
        var $ot=$oldtimes[$file];
        delete($oldtimes[$file]);
        if(fs.mTime($file)==$ot)continue;
    }
    else if(!$first){
        var np=$srctodst($file);
        if(fs.exists(np)){
            echo(np+"该文件已经存在!");
            ok=false;
            delete($newtimes[$file]);
            fs.rmFile($file);
        }
    }
    if(ok)
    $changefiles.push($file);
}
if($deleteDstOld) {
    for (var $p in $oldtimes) {
        var $dstpath = $srctodst($p);
        fs.rmFile($dstpath);
    }
}
if($changefiles.length>0){//
    var $arr=[];
    for(var $changefile in $changefiles) {
        $changefile=$changefiles[$changefile];
        $arr[$changefile]=$srctodst($changefile);
    }
    var $ok=true;
    if($resultfun!=null)$ok=$resultfun($arr,$first);
    if($ok)echo("\x07转换完成!"+NEWLINE);
}
   this.set('first'+$src,false);
   this.set('time'+$src,$newtimes);
}
}
exports.watch=__WatchFile;


