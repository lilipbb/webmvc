<?php
set_time_limit(0);
$html = file_get_contents('http://php.net/manual/en/indexes.functions.php');
$path=__DIR__;
if(file_exists($path.'/fun.txt')){
   $funs=file_get_contents($path.'/fun.txt');
   $funs=explode(';',$funs);
   $downloadnames=[];
    foreach ($funs as $fun) {
        $downloadnames[]=explode('@',$fun)[0];
   }
}
$file=fopen($path.'/fun.txt','a');
preg_match_all('/<li><a href="function.[^>]*>([a-zA-Z0-9_]*)<\/a>/', $html, $matches);
$funcs = $matches[1];
$index=0;
set_error_handler(function (){throw new Exception("下载错误!");});
foreach($funcs as $funname) {
    $redown=true;
    if(isset($downloadnames)&&in_array($funname,$downloadnames))continue;
    if(substr($funname,0,3)=='oci')continue;
    start:
    $funweb='';
    try {
        $funweb = file_get_contents('http://php.net/manual/en/function.' .strtolower(str_replace('_', '-', $funname)) . '.php');
    }
    catch (Exception $e){
        try {
            $funweb = file_get_contents('http://php.net/manual/en/function.' .strtolower($funname) . '.php');
        }
        catch (Exception $e){

        }
    }
    if($funweb=='')continue;
    preg_match('@<div class="methodsynopsis dc-description">\s*<span class="type">[^\/>]*?>?(\w+)<\/@',$funweb,$matches);
    $returntype='';
    if($matches!=null&&count($matches)>1)
    $returntype=$matches[1];
    preg_match_all('@<span class="methodparam"><span class="type">[^\/>]*?>?(\w+)<\/@',$funweb,$matches);
    if($matches==null||count($matches)<1||count($matches[0])<1||trim($matches[0][0])==''){
        preg_match_all('@<span class="methodparam">(\w+)@',$funweb,$matches);
    }
    if($returntype==''||$matches==null||count($matches)<1||count($matches[0])<1||trim($matches[0][0])==''){
         echo"{$funname}该方法已经弃用";
    }
    $params=$matches[1];
    fwrite($file,"${funname}@${returntype}@".implode('@',$params).';');
    $index++;
    echo('已经下载到：'.$index.'个'."\r\n");
}