var fs=require("./fsync");
PATH_ROOT=fs.dirname(fs.dirname(__dirname.replace(/\\/g,'/')))+'/';
NEWLINE="\r\n";
md5=require('md5');
echo=function(mes){console.log(mes);}
isset=function(arg){return typeof arg!=="undefined";};
exec= require('child_process').execSync;
execAsync=require('child_process').exec;
String.prototype.substr=function (start,end) {
    if(start<0)start=this.length+start;
    if(!isset(end))end=this.length;
    else{
        if(end<0)end=this.length+end;
        else end=start+end;
    }
    var str=[];
    for(;start<end&&start<this.length;start++){
        str.push(this[start]);
    }
    return str.join('');
};
argv=process.argv.slice(2);
