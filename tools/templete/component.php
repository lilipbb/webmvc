<?php
namespace Pbb\Templete;
class Component extends TempBase {
    public function GetExt()
    {
        return '.tmp';
    }

    public function GetBasePath()
     {
         return PATH_COMPONENT;
     }
     public function GetTemplete($classname,$namespace)
     {
         $classname=strtolower($classname);
         return <<<ETO
         <!--该文件内的公共方法-->
<?
    
?>

<!--{$classname}模块-->
<tmp tagname="{$classname}">
    <?
         
    ?>
    <{$classname} {\$attr}><slot></slot></{$classname}>
</tmp>
ETO;
     }
 }