require("./main");
var fs=require("fs");
var p=require("path");
function readfiles(path,recursion,fliter,arr) {
    arr=arr||[];
    fliter=fliter||null;
    if(typeof recursion!=='number')recursion=0;
    if(path.substr(-1)!='/')path+='/';
    if(fs.existsSync(path)){
        var list=fs.readdirSync(path);
        list.forEach(function (v) {
            var full=path+v;
            if(fs.existsSync(full)){
                var stat=fs.statSync(full);
                if(isFile(full)){
                    if(fliter==null||fliter(v,path))
                        arr.push(full);
                }
                else{
                    if(recursion!=0)
                        readfiles(full,recursion-1,fliter,arr);
                }
            }
        });
    }
    return arr;
}
function readdirs(path,recursion,fliter,arr) {
    arr=arr||[];
    fliter=fliter||null;
    if(typeof recursion!=='number')recursion=0;
    if(path.substr(-1)!='/')path+='/';
    if(fs.existsSync(path)){
        var list=fs.readdirSync(path);
        list.forEach(function (v) {
            var full=path+v;
            if(fs.existsSync(full)){
                var stat=fs.statSync(full);
                if(isDir(full)){
                    if(fliter==null||fliter(v,path))
                        arr.push(full);
                    if(recursion!=0)
                        readdirs(full,recursion-1,fliter,arr);
                }
            }
        });
    }
    return arr;
}
function exists(path) {
    return fs.existsSync(path);
}
function isDir(path) {
    if(exists(path)){
        return fs.statSync(path).isDirectory();
    }
    return false;
}
function isFile(path) {
    if(exists(path)){
        return fs.statSync(path).isFile();
    }
    return false;
}
function readFile(path) {
    if(exists(path))
        return fs.readFileSync(path,'utf-8');
    return '';
}
function writeFile(path,data) {
    mkDir(dirname(path));
    fs.writeFileSync(path,data);
}
function mkDir(path) {
    if(!fs.existsSync(path)){
        mkDir(dirname(path));
        fs.mkdirSync(path,744);
    }
}
function deleteFile(path) {
    if(exists(path))
        fs.unlinkSync(path);
}
function deleteDir(path) {
    if(exists(path)){
        exec('rd /s/q "'+path+'"');
    }
}
function basename(path) {
    return p.basename(path);
}
function dirname(path) {
    return p.dirname(path);
}
function mTime(path) {
    if(exists(path)){
        return fs.statSync(path).mtime.getTime();
    }
    return 0;
}
function copy(src,dst) {
    writeFile(dst,readFile(src));
}
module.exports={
    mTime:mTime,
    dirname:dirname,
    basename:basename,
    mkDir:mkDir,
    writeFile:writeFile,
    readFile:readFile,
    isFile:isFile,
    isDir:isDir,
    exists:exists,
    getFileNames:function (path,recursion,fliter) {
        return readfiles(path,recursion,fliter);
    },
    getDirNames:function (path,recursion,fliter) {
        return readdirs(path,recursion,fliter);
    },
    rmFile:deleteFile,
    rmDir:deleteDir,
    copy:copy
}