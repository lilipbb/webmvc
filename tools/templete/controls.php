<?php
namespace Pbb\Templete;
 class Controls extends TempBase {
     public function GetBasePath()
     {
         return PATH_CONTROLS;
     }
     public function GetTemplete($classname,$namespace)
     {
         $fun=CONTROLS_FUN;
         if($namespace)$namespace='\\'.$namespace;
         return <<<ETO
       <?php
namespace Controls{$namespace};
class {$classname} extends \Controls\Pbbcontrol\ControlBase{
    public function {$fun}()
    {
        echo('WelcomeToPbb');
    }
}
ETO;
     }
 }