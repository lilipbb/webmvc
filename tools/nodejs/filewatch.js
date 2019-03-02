"use strict";
require("./main");
var __WatchFile=require("./watch").watch;
var fs=require("./fsync");
echo("开始进行scss文件的监控!"+NEWLINE);
const PATH_PUBLIC=PATH_ROOT+'public/';
var $npmPath='C:/Users/Administrator/AppData/Roaming/npm/';
var $tspath=PATH_PUBLIC+'ts/';
var $jspath=PATH_PUBLIC+'js/';
var $scsspath=PATH_PUBLIC+'scss/';
var $csspath=PATH_PUBLIC+'css/';
fs.mkDir($tspath);
fs.mkDir($scsspath);
var watch=new __WatchFile();
var watchstart=function () {
    // watch.watchdir($tspath,$jspath,'ts','js',function($changefiles,$first){
    //     if($first)return false;
    //     echo("开始转换!");
    //     for(var $changefile in $changefiles) {
    //         var $dstfile=$changefiles[$changefile];
    //         echo(fs.basename($changefile)+"文件进行转换."+NEWLINE);
    //         exec('php call.php include "'+$changefile+'" "'+$changefile+'.ts"');
    //         exec('tsc --outFile "'+$dstfile+'" "'+$changefile+'.ts"');
    //         fs.rmFile($changefile+".ts");
    //     }
    //     return true;
    // },true);
    watch.watchdir($scsspath,$csspath,'scss','css',function($changefiles,$first){
        if($first)return false;
        echo("开始转换!");
        for(var $changefile in $changefiles) {
            var $dstfile=$changefiles[$changefile];
            echo(fs.basename($changefile)+"文件进行转换."+NEWLINE);
            fs.mkDir(fs.dirname($dstfile));
            exec('php call.php scss "'+$changefile+'" "'+$dstfile+'"');
            exec('postcss'+' -u autoprefixer -o '+$dstfile+' '+$dstfile);
            var cssmes=fs.readFile($dstfile);
            cssmes=cssmes.replace(/\/\*.*?\*\//,'');
            fs.writeFile($dstfile,cssmes);
        }
        return true;
    },true);
    watch.watchdir(PATH_ROOT+'app/','','php','',function ($changefiles,$first) {
        exec('php call.php composerauto');
    });
};
setInterval(watchstart,500);
