<?php
namespace Pbb\Templete;
class Test extends TempBase {
     public function GetBasePath()
     {
         return PATH_APP.'test';
     }
     public function GetTemplete($classname,$namespace)
     {
         if($namespace)$namespace='\\'.$namespace;
         return <<<ETO
        <?php
namespace Test{$namespace}{
    use PbbHelpers\Util;
    class {$classname}{
       
    }
}
ETO;
     }
 }