function rect(center,col,w,h){
    this.col=col;
    this.center=center;
    this.w=function () {
        if(w<=0) return 0.01;
        else if(w>=rect.maxw)return rect.maxw-1;
        return w;
    };
    this.h=function () {
        if(w<=0) return 0.01;
        else if(h>=rect.maxh)return rect.maxh-1;
        return h;
    };
    this.x=function() {
        return center.x-this.w()/2;
    };
    this.y=function () {
        return center.y-this.h()/2;
    };
    this.setW=function (v) {
        w+=v;
    };
    this.setH=function (v) {
        h+=v;
    };
}
function drawrects(rects,ctx,speed,img,iw,ih) {
    var iw=0,ih=0;
    if(img!=null){
         iw=img.naturalWidth/img.clientWidth;
         ih=img.naturalHeight/img.clientHeight;
    }
    for(var i=0;i<rects.length;i++){
        var r=rects[i];
        r.setW(speed);
        r.setH(speed);
        ctx.lineWidth=r.w()/10;
        if(img==null){
            ctx.beginPath();
            ctx.rect(r.x(),r.y(),r.w(),r.h());
            ctx.fillStyle='#'+r.col;
            ctx.strokeStyle='#eeeeee';
            ctx.fill();
            ctx.stroke();
        }
        else{
            ctx.drawImage(img,r.x()*iw,r.y()*ih,r.w()*iw,r.h()*ih,r.x(),r.y(),r.w(),r.h());
        }
    }
}
function getrects(w,h,wnum,hnum,ox,oy) {
    var onew=w/wnum;
    var oneh=h/hnum;
    var rects=[];
    for(var i=0;i<hnum;i++){
        for(var ii=0;ii<wnum;ii++){
            var hp=(i+0.5)/hnum;
            var wp=(ii+0.5)/wnum;
            var one=(1-hp)*(1-wp);
            var two=(1-hp)*wp;
            var three=hp*(1-wp);
            var four=hp*wp;
            var col=(Math.round(one*0xff+two*0x22+three*0xdd)<<8)+Math.round(one*0xff+two*0xaa+three*0x22+four*0x66);
            var x=onew/2+ii*onew;
            var y=oneh/2+i*oneh;
            var xx=((ii+0.5)/wnum)-ox;
            var yy=((i+0.5)/hnum)-oy;
            var l=Math.sqrt(xx*xx+yy*yy);
            rects.push(new rect(new Vector2(x,y),col.toString(16)+'ff',-l*w/4,-l*h/4));
        }
    }
    rect.maxw=onew;
    rect.maxh=oneh;
    return rects;
}
var effect={
    start:function(el) {
        if(el.hasAttribute('effectid')){
            var eid=el.getAttribute('effectid');
            if(this.fun.hasOwnProperty(eid)){
               setTimeout(function () {
                   effect.fun[eid]();
               },0);
            }
        }
    },
    fun:{}
};
function effect_pre_start(canvas,effectindex,ox,oy,numx,numy,latetime,other) {
    if(ox===undefined)
    ox=0.5;
    if(oy===undefined)
    oy=0.5;
    var l=(Math.abs(0.5-ox)+Math.abs(0.5-oy))/2+1;
    if(l>1.5)l=1.5;
    numx=numx||10;
    numy=numy||10;
    if(latetime===undefined)
      latetime=1000;
    canvas.style.position='absolute';
    var parent=canvas.parentNode;
    if(parent.hasAttribute('effectid')){
        effect.fun[parent.getAttribute('effectid')]=function () {
            effect_pre_start(canvas,effectindex,ox,oy,numx,numy,latetime,other);
        };
    }
    if(getComputedStyle(parent).display=='none'){
        return;
    }
    var childs=parent.children;
    var opacitys={};
    var img=null;
    for(var i=0;i<childs.length;i++){
        if(childs[i]!=canvas&&childs[i].style){
            if(childs[i].hasAttribute('effect')&&childs[i].tagName.toLowerCase()=='img'){img=childs[i];}
            if(!childs[i].hasAttribute('nohide')){
                opacitys[i]=childs[i].style.opacity;
                childs[i].style.opacity=0;
            }
        }
    }
    var p=$(parent);
    if(effectindex==0){
        $(other).width($(other.parentNode).width()-4);
        $(other).height($(other.parentNode).height()-4);
        for(var k in other.children){
            if(typeof(other.children[k])=='object') {
                $(other.children[k]).animate({width: '100%', height: '100%', top: '0', left: '0'},latetime);
                $(other.children[k]).animate({'z-index': '-1'},0);
            }
        }
    }
    var size=effectindex==0?-4:0;
    canvas.width=p.width()+size;
    canvas.height=p.height()+size;
    if(parent.style.position!='absolute')
    parent.style.position='relative';
    if(parent.style.overflow=='hidden')
    canvas.style.borderRadius=parent.style.borderRadius;
    if(img!=null){
        img.width=p.width();
        img.height=p.height();
        img.style.position='absolute';
        img.style.zIndex=-1;
    }
    var ctx=canvas.getContext('2d');
    var rects=getrects(canvas.width,canvas.height,numx,numy,ox,oy);
    var alpha=1;
    var ok=false;
    var drawrecti=setInterval(function () {
        canvas.style.opacity=alpha;
        if(alpha<0){
            clearInterval(drawrecti);
            rects=null;
            return;
        }
        if(ok)
            alpha-=0.1;
        else{
            //ctx.clearRect(0,0,canvas.width,canvas.height);
            drawrects(rects,ctx,1*canvas.width/100*1000/latetime,img);
        }
    },35);
    setTimeout(function () {
        ok=true;
        for(var i=0;i<childs.length;i++){
            if(childs[i]!=canvas&&childs[i].style&&!childs[i].hasAttribute('nohide')){
                childs[i].style.opacity=opacitys[i];
            }
        }
        childs=null;
        opacitys=null;
    },latetime);
}