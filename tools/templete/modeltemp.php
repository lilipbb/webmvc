<?php
namespace Pbb\Templete;
class ModelTemp extends TempBase {
     public function GetBasePath()
     {
         return PATH_MODEL;
     }
     public function GetTemplete($classname,$namespace)
     {
         if($namespace)$namespace='\\'.$namespace;
         return <<<ETO
         <?php
namespace Model{$namespace};
class {$classname} extends \Model\PbbDb\ModelBase
{
    public \$name;
}
ETO;
     }
 }