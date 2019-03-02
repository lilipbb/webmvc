function Line(v1,v2) {
    this.start=v1;
    this.end=v2;
    var offx=v2.x-v1.x;
    var offy=v2.y-v1.y;
    this.a=1;this.b=1;
    if(offx==0){this.b=0;}
    if(offy==0){this.a=0;}
    if(offx!=0&&offy!=0){
        this.b=-offx/offy;
    }
    this.c=-(v1.x*this.a+v1.y*this.b);
    this.normal=new Vector2(this.a,this.b).Normalize();
}
Line.prototype.Up=function (v) {
    return this.a*v.x+this.b*v.y+this.c>=0;
};
Line.prototype.Down=function (v) {
    return !this.Up(v);
};
Line.prototype.toString=function () {
    return (this.a+'x'+this.b+'y+'+this.c+'=0\n');
};
function Matrix(m00,m01,m02,m10,m11,m12,m20,m21,m22) {
    if(m00===undefined)
    this.m00=1;
    this.m01=m01||0;
    this.m02=m02||0;
    this.m10=m10||0;
    if(m11===undefined)
    this.m11=1;
    this.m12=m12||0;
    this.m20=m20||0;
    this.m21=m21||0;
    if(m22===undefined)
    this.m22=1;
}
Matrix.prototype.MulMatrix=function (m) {
    var nm=new Matrix(this.m00*m.m00+this.m01*m.m10+this.m02*m.m20,this.m00*m.m01+this.m01*m.m11+this.m02*m.m21,this.m00*m.m02+this.m01*m.m12+this.m02*m.m22,this.m10*m.m00+this.m11*m.m10+this.m12*m.m20,this.m10*m.m01+this.m11*m.m11+this.m12*m.m21,this.m10*m.m02+this.m11*m.m12+this.m12*m.m22,this.m20*m.m00+this.m21*m.m10+this.m22*m.m20,this.m20*m.m01+this.m21*m.m11+this.m22*m.m21,this.m20*m.m02+this.m21*m.m12+this.m22*m.m22);
    return nm;
};
Matrix.prototype.toString=function () {
    return this.m00+' '+this.m01+' '+this.m02+"\n"+this.m10+' '+this.m11+' '+this.m12+"\n"+this.m20+' '+this.m21+' '+this.m22+"\n";
};
Matrix.prototype.MulVector2=function (v) {
    var nv=new Vector2(this.m00*v.x+this.m01*v.y+this.m02,this.m10*v.x+this.m11*v.y+this.m12);
    return nv;
};
Matrix.prototype.MulLine=function (line) {
    var np=this.MulVector2(line.start);
    var np1=this.MulVector2(line.end);
    return new Line(np,np1);
};
Matrix.prototype.Get=function () {
  return [this.m00,this.m10,this.m01,this.m11,this.m02,this.m12];
};
Matrix.prototype.SetScale=function(w,h) {
    this.m00=w;this.m11=h;
};
Matrix.prototype.SetRotate=function(angle) {
    var a2d=Math.PI*angle/180;
    var cosv=Math.cos(a2d);
    var sinv=Math.sin(a2d);
    this.m00=cosv;
    this.m01=-sinv;
    this.m10=sinv;
    this.m11=cosv;
};
Matrix.prototype.SetTransform=function (x,y) {
    this.m02=x;
    this.m12=y;
};
Matrix.prototype.SetCanvasTransform=function (ctx) {
    ctx.transform.apply(ctx,this.Get());
};
Matrix.Create=function(x,y,r,s) {
    r=r||0;
    if(s!==0)
    s=s||1;
    var sm=new Matrix();
    sm.SetScale(s,s);
    var rm=new Matrix();
    rm.SetRotate(r);
    var tm=new Matrix();
    tm.SetTransform(x,y);
    return tm.MulMatrix(rm.MulMatrix(sm));
};