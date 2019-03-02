<?php
if(!defined('RC'))define('RC',false);
include_once ("base.php");
    echo("初始化  清除缓存  开发模式  上线模式  创建模板   重启  mysql重启  压力测试      插件开发        修复html\r\n");
    echo(" init      cc      debug      work        cr      re      mre        ab      ex(tr,build,u)        li\r\n");
    echo("$");
    $get=fgets(STDIN);
    $args=preg_split('@ +@',trim($get));
    $a1=substr(strtolower($args[0]),0,2);
    function stop($str=""){
        echo($str."输入任意键继续");
        fgets(STDIN);
    }
    switch ($a1){
        case "in":
            include_once("init.php");
            stop("初始化完成\r\n");
            break;
        case "cc":
            include_once("clearcache.php");
            stop("缓存清除完成\r\n");
            break;
        case "de":
            include_once("mode-debug.php");
            stop("转换为开发模式\r\n");
            break;
        case "wo":
            include_once("mode-work.php");
            include_once("add-webkit-ms.php");
            stop("转换为上线模式\r\n");
            break;
        case "cr":
            include_once("./templete/tempbase.php");
            if(count($args)<3)
                stop("创建参数太少\r\n");
            else{
                $mes=\Pbb\Templete\TempBase::Load($args[1],$args[2]);
                if($mes===true)
                stop("创建模板完成\r\n");
                else if($mes===false)
                 stop("没有找到{$args[1]}模板\r\n");
                else
                 stop($mes.NEWLINE);
            }
            break;
        case "re":
            include_once("serverStop.php");
            include_once("serverStart.php");
            stop();
            break;
        case "mr":
            include_once("mysqlRestart.php");
            stop();
            break;
        case "ab":
            include_once ("abtest.php");
            stop();
            break;
        case "ex":
            include_once("makext.php");
            stop();
            break;
//        case "rc":
//            include_once("makrc.php");
//            stop();
//            break;
        case 'li':
            include_once ("composerauto.php");
            include_once ("repair.php");
            break;
        default:
            if(strlen($args[0])==3&&($args[0][0]=='e'||$args[0][0]=='q'))exit(1);
            echo("没有该命令：".$get);
            stop();
    }