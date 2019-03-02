<?php
namespace Pbb\Templete;
class View extends TempBase {
     public function GetBasePath()
     {
         return PATH_VIEW;
     }
     public function GetTemplete($classname,$namespace)
     {
         return <<<'ETO'
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<body>
</body>
</html>
ETO;
     }
 }