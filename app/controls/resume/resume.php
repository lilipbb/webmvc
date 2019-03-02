<?php
namespace Controls\Resume;
use Model\PbbDb\ModelBase;
use Pbb\CorePbb;
use PbbHelpers\Mail;
use PbbHelpers\Util;

class Resume extends \Controls\Pbbcontrol\ControlBase{
    public function show($index=0)
    {
        $index=intval($index);
        $this->title=['丢丢大作战','绘画','永恒伊甸园','动态壁纸','webmvc框架、pbb框架'];
        $index=$index%count($this->title);
        switch ($index){
            case 0:$name="diudiu";
                break;
            case 1:$name="draw";
            break;
            case 2:$name="yhydy";
            break;
            case 3:$name="bizi";
            break;
            case 4:$name="none";
                break;
            default:
                $name="";
        }
        $this->name=$name;
        $this->index=$index;
        $this->display();
    }
    protected function getImages(){
        $n=$this->name;
        $names=[];
        if(!file_exists(PATH_IMAGES.'resume/'.$n)){
            return $names;
        }
        Util::getFiles(PATH_IMAGES.'resume/'.$n,0,function($name)use(&$names,$n){
            $names[]='resume/'.$n.'/'.$name;
        });
        return $names;
    }
    public function sendMail($title,$mes){
        ModelBase::beginTransaction();
        $m=new ModelBase('','','mail');
        $m->title=$title;
        $m->mes=$mes;
        $m->insert();
        if(ModelBase::Commit())
            return true;
    }
}