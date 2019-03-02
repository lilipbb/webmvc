<?php
namespace Pbb\Templete;
class Templete extends TempBase {
     public function GetBasePath()
     {
         return PATH_ROOT.'tools/templete';
     }
     public function GetTemplete($classname,$namespace)
     {
         $eto='ETO;';
         return <<<ETO
       <?php
namespace Pbb\Templete;
class $classname extends TempBase {
     public function GetBasePath()
     {
         return PATH_APP;
     }
     public function GetTemplete(\$classname,\$namespace)
     {
         if(\$namespace)\$namespace='\\\\'.\$namespace;
         return <<<ETO
         
$eto
     }
 }
ETO;
     }
 }