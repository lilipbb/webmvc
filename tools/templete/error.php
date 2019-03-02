<?php
namespace Pbb\Templete;
class Error extends TempBase {
     public function GetBasePath()
     {
         return PATH_CORE.'pbberror';
     }
     public function GetTemplete($classname,$namespace)
     {
         if($namespace)$namespace='\\'.$namespace;
         return <<<ETO
         <?php
namespace PbbError{$namespace};
class {$classname} extends ErrorBase {
    
}
ETO;
     }
 }