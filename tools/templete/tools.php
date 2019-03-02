<?php
namespace Pbb\Templete;
class Tools extends TempBase {
     public function GetBasePath()
     {
         return PATH_APP.'tools';
     }
     public function GetTemplete($classname,$namespace)
     {
         if($namespace)$namespace='\\'.$namespace;
         return <<<ETO
        <?php
namespace Tools{$namespace};
class {$classname}{
    public static function test(){  
    }
}
ETO;
     }
 }