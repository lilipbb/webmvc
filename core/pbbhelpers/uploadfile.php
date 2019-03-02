<?php
namespace PbbHelpers;
use Pbb\CorePbb;

class UploadFile{
    public $filename;
    public $type;
    public $size;
    private $tmpname;
    public function have(){
        return $this->size!='';
    }
    public function __construct($name)
    {
        if(isset($_FILES[$name])){
            $arr=$_FILES[$name];
            $this->filename=$arr['name'];
            $this->type=$arr['type'];
            $this->tmpname=$arr['tmp_name'];
            $this->size=$arr['size'];
        }
        else{
            CorePbb::Error($name.'：客户端的如此命名的name不存在',false);
        }
    }
    public function rename($nname=''){
        if($nname==''){
            $nname=date("Y-m-d H.i.s");
            $ne=explode('.',$this->filename);
            if(count($ne)>1)
                $nname.='.'.$ne[count($ne)-1];
        }
        $this->filename=$nname;
    }
    public function moveto($path=''){
        if($path!=''&&!file_exists(PATH_UPLOADS.$path)){
            mkdir(PATH_UPLOADS.$path,0744,true);
        }
        move_uploaded_file($this->tmpname,PATH_UPLOADS.$path.'/'.$this->filename);
    }
}