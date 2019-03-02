<?php
namespace Controls\Game;
use Model\PbbDb\ModelBase;

class Main{
    public function getid($username,$psd){
        $id='';
       ModelBase::beginTransaction();
       $user=new ModelBase('username,password',"$username,$psd");
       if(!$user->haveuser())return '';
       $mod=new ModelBase('username',$username,'recharge');
        if(!$mod->haveuser()){$mod->username=$username;$mod->money=0;$mod->insert();}
       $id=md5($username.time());
        $payid=$mod->payid;
       if($payid){
           if(strpos($payid,$id)!==false)return '';
           $mod->payid.='-'.$id;
       }
       else $mod->payid=$id;
       $mod->update();
       if(ModelBase::Commit()){
           return $id;
       }
       return '';
    }
    public function rechargecallback(){
        $mes=explode('&',$_POST['backParams']);
        $username=$mes[0];
        $type=intval($mes[1]);
        ModelBase::beginTransaction();
        $user=new ModelBase('username',$username,'recharge');
        if(!$user->haveuser()){$user->username=$username;$user->money=0;$user->insert();}
        $money=40;
        switch ($type){
            case 1:$money=220;
                break;
            case 2:$money=500;
                break;
            case 3:$money=1200;
                break;
        }
        $user->money+=$money;
        $user->update();
        if(ModelBase::Commit())
        return "success";
    }
}