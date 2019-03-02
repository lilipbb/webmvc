<?php
namespace PbbOther\Helpers;
use Pbb\CorePbb;

class ImageSplit{
    protected $w;
    protected $h;
    protected $ws;
    protected $hs;
    protected $img;
    public function __construct($w,$h,$isjpg=true,$wsplit=1,$hsplit=1){
        $this->w=$w;
        $this->h=$h;
        $this->ws=$wsplit;
        $this->hs=$hsplit;
        $this->img=imagecreatetruecolor($w,$h);
        $this->fill();
    }
    public function copyto(ImageSplit $dst,$dstsplit,$srcsplit,$horizontal=true){
        $srcsplit=$srcsplit%($this->ws*$this->hs);
        $dstsplit=$dstsplit%($dst->ws*$dst->hs);
        if($horizontal) {
            $dstx = ($dstsplit % $dst->ws) / $dst->ws * $dst->w;
            $dsty = ((int)($dstsplit / $dst->ws)) / $dst->hs * $dst->h;
        }
        else{
            $dstx = ((int)($dstsplit / $dst->hs))/ $dst->ws * $dst->w;
            $dsty = ($dstsplit % $dst->hs)  / $dst->hs * $dst->h;
        }
        $srcx=($srcsplit%$this->ws)/$this->ws*$this->w;
        $srcy=((int)($srcsplit/$this->ws))/$this->hs*$this->h;
        imagecopyresampled($dst->img,$this->img,$dstx,$dsty,$srcx,$srcy,$dst->w/$dst->ws,$dst->h/$dst->hs,$this->w/$this->ws,$this->h/$this->hs);
    }
    public function fill($color=0xffffff){
        imagefill($this->img,0,0,$color);
    }
    public function show($pic='jpeg'){
        ob_clean();
        $f=substr($pic,0,1);
        if($f=='j'){
            header('Content-Type:Image/jpeg'.$pic);
            imagejpeg($this->img);
        }
        else if($f=='p'){
            header('Content-Type:Image/png');
            imagesavealpha($this->img,true);
            imagepng($this->img);
        }
        else if($f=='g'){
            header('Content-Type:Image/gif'.$pic);
            imagegif($this->img);
        }
    }
    public function __destruct(){
        if($this->img!=null)
            imagedestroy($this->img);
    }
}
class ImageSplit_Loc extends ImageSplit {
    public function __construct($path,$wsplit=1,$hsplit=1){
        $this->ws=$wsplit;
        $this->hs=$hsplit;
        if(!file_exists($path)){
            CorePbb::Error($path.' ||the image is not exists',false);
        }
        $info=getimagesize($path);
        $this->w=$info[0];
        $this->h=$info[1];
        if(strpos($info['mime'],'png')===false)
            $this->img=imagecreatefromjpeg($path);
        else
            $this->img=imagecreatefrompng($path);
    }
}
class ImageSplit_Code{
    public static function getimage($w=4,$h=4){
        $ani=new ImageSplit_Loc(PATH_CORE.'assets/animal.png',5);
        $arr=[];
        $nimg=new ImageSplit(64*$w,64*$h,true,$w,$h);
        for($i=0;$i<$w*$h;$i++){
            $r=rand(0,4);
            $arr[$i]=$r;
        }
        $sel=rand(0,$w-1);
        $selani=rand(0,4);
        if(rand(0,1)==1)$selani=$arr[$sel+rand(0,$h-1)*$w];
        $sum=0;
        for($i=0;$i<$h;$i++){
            if($arr[$sel+$i*$w]==$selani)
                $sum++;
        }
        for ($i=0;$i<$w;$i++){
            if($i==$sel)continue;
            $sumt=0;
            for($ii=0;$ii<$h;$ii++){
                if($arr[$i+$ii*$w]==$selani)
                    $sumt++;
            }
            if($sumt==$sum){
                if($sum==0)
                    $arr[$i+rand(0,$h-1)*$w]=$selani;
                else {
                    for ($ii = 0; $ii < $h; $ii++) {
                        if($arr[$i+$ii*$w]==$selani)
                            $arr[$i+$ii*$w]++;
                    }
                }
            }
        }
        Session::Set('animal',$selani|($sum<<8)|($sel<<16));
        Session::Set('coderesult',$sel);
        for($i=0;$i<$w*$h;$i++){
            $ani->copyto($nimg,$i,$arr[$i]);
        }
        $ani=null;
        return $nimg;
    }
    public static function getmessage(){
        $arr=['鼠','虎','猴','鸡','猪'];
        if(Session::Have('animal')){
            $ani=Session::Get('animal');
            $sel=$ani&0xff;
            $num=$ani>>8&0xff;
            if($num==0)
            return "请移动到没有 <b>$arr[$sel]</b> 的一列!";
            if($num==3)
             return "请移动到全是 <b>{$arr[$sel]}</b> 的一列!";
            return '请移动到有<b>'.$num.($sel==1||$sel==4?'头':'只').$arr[$sel].'</b> 的一列!';
        }
        else{
            CorePbb::Log("no code");
        }
    }
    public static function isok($result){
          if(!Session::Have("animal"))return "error";
          $r=(int)($result+0.5)==($_SESSION['animal']>>16);
          return $r;
    }
}
