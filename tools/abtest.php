<?php
require_once('base.php');
if(count($args)>2)$count=$args[2];
else $count=1;
while($count-->0) {
//��ַ
    $m=[];
    exec('"' . PATH_APACHE . 'bin/ab.exe" -n ' . (count($args) > 1 ? (int)$args[1] : 5000) . ' -c 100 http://' . WEB_NAME . '/', $m);
    foreach ($m as $k => $item) {
        if ($k > 12)
            echo $item . NEWLINE;
        if ($k > 24) break;
    }
}