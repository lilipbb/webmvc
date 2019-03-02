<?php
require(__DIR__."/../base.php");
$include=function ($path,$dstpath){
    ob_start();
    include($path);
    $str=ob_get_contents();
    ob_end_clean();
    file_put_contents($dstpath,$str);
};
if($argc>1){
    switch ($argv[1]){
        case 'scss':
            $include($argv[2],$argv[3]);
            \PbbHelpers\ScssToCss::Begin($argv[3],$argv[3]);
            break;
        case 'include':
            $include($argv[2],$argv[3]);
            break;
        case 'composerauto':
            require(__DIR__.'/../composerauto.php');
            break;
    }
}