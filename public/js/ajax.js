var press=false;
var r;
var _ajaxq=[];
       var ajaxPost=function(mac,fun,errorfun){
       	 var arr=[];
       	 for(i=3;i<arguments.length;i++){
       	 	arr.push(arguments[i]);
		 }
          _ajax_(mac,fun,true,arr,this,errorfun);
      }
       var ajaxGet=function(mac,fun,errorfun) {
           var arr=[];
           for(i=3;i<arguments.length;i++){
               arr.push(arguments[i]);
           }
           _ajax_(mac,fun,false,arr,this,errorfun);
       };
       var ajaxPostAsync=function(mac) {
           var arr=[];
           for(i=1;i<arguments.length;i++){
               arr.push(arguments[i]);
           }
		   return new Promise(function(r,e){
               _ajax_(mac,r,true,arr,this,e);
		   });
       }
		var ajaxGetAsync=function(mac) {
  		  var arr=[];
 		   for(i=1;i<arguments.length;i++){
     		   arr.push(arguments[i]);
   			 }
  		  return new Promise(function(r,e){
  		      _ajax_(mac,r,false,arr,this,e);
   			 });
		}
       function _ajax_(mac,f,_ajaxmethod,objs,__this,errorfun){
		 if(press){
             _ajaxq.push(function () {
				ajax(mac,f,_ajaxmethod,objs,__this);
            });
             return;
		 }
		   press=true;
		if(r==null) {
            if (window.XMLHttpRequest) {
                r = new XMLHttpRequest();
            } else { //IE6及其以下版本浏览器
                r = new ActiveXObject('Microsoft.XMLHTTP');
            }
        }
        arr=mac.split('?');
		mac=arr[0];
		var args='';
		if(arr.length>1)args=arr[1];
           var index=0;
           args=args.replace(/(.?)%(.?)/g,function(m,m1,m2){
               if(m1!=''&&m1!='&')return m;
               if(m2!=''&&m2!='&')return m;
               var mes='';
               if(objs.length>index){
                   var obj=objs[index++];
                   if(obj==null||obj==undefined)mes='';
                   else{
                       var type=typeof(obj);
                       if(type=='object')mes=':'+JSON.stringify(obj);
                       else if(type=='boolean')mes=':b'+(obj?1:0);
                       else if(type=='number'){
                           if(obj.toString().indexOf('.')>=0)mes=':d'+obj;
                           else mes=':i'+obj;
                       }
                       else mes=obj;
				   }
               }
               else mes='';
               return m1+mes+m2;
           });
           var path=location.pathname.replace(/[^\/]+[/]?$/,'');
           if(mac.indexOf('/')>0){
               path=path.replace(/[^\/]+[/]$/,'');
               mac=path+mac;
           }
           else
               mac=path+mac;
           args=encodeURIComponent(args);
        if(_ajaxmethod) {
            r.open("POST",mac, true);
            r.setRequestHeader("CONTENT-TYPE", "application/x-www-form-urlencoded");
        }
        else {
			if(args!='')mac=mac+'?mac__='+args;
			r.open("GET",mac);
		}
		r.onreadystatechange=function(){
		    if(r.readyState==4)
		    {
				clearTimeout(openshow);
				clearTimeout(timeout);
                var c=document.getElementById('_tmpdiv');
                if (c != null) { c.remove(); }
                var status=r.status;
                var text=r.responseText;
                press=false;
				if(status==200){
					if(f){
						if(text.length>2&&text[0]==':'){
							switch (text[1]){
								case 'd':
								case 'i':text=parseFloat(text.substr(2));
								break;
								case 'b':text=(text[2]=='1');
								break;
								default:text=JSON.parse(text.substr(1));
								break;
							}
						}
                        f.call(__this,text);
					}
                    if(_ajaxq.length>0)
                        _ajaxq.pop()();
                    else
                        r=null;
				}
				else{
					if(errorfun){
						errorfun();
					}
					console.log("获取内容超时");
                    r=null;
				}
		    }
		};
		 function Timeout(){
			r.abort();
			r=null;
		}
		 if(_ajaxmethod)
	     r.send("mac__="+args);
		 else r.send();
		 var openshow=setTimeout(LoadShow,500);
		 var timeout=setTimeout(Timeout,5000);
		}
		function LoadShow(){
            if(document.getElementById("_loadstyle")==null)
                document.head.innerHTML += "<style id='_loadstyle'>#_load{animation: myani 1s infinite steps(12);-webkit-animation: myani 1s infinite steps(12);}@keyframes myani{0%{transform: rotate(0)}100%{transform: rotate(360deg)}}@-webkit-keyframes myani{0%{-webkit-transform: rotate(0)}100%{-webkit-transform: rotate(360deg)}}</style>";
            ww=document.documentElement.clientWidth,wh=document.documentElement.clientHeight;
			var w=ww/10;
			var left=9*ww/20;
			var top=wh/2-w/2;
			var _div=document.createElement('div');
			_div.id='_tmpdiv';
			_div.innerHTML="<canvas onClick='#' id='_body' width='"+ww+"' height='"+wh+"' style='background:rgba(0,0,0,0.05);position:fixed;left:0;top:0;'></canvas>"+"<canvas width='"+w+"' height='"+w+"' id='_load' style='position:fixed;left:"+left+"px;top:"+top+"px;'></canvas>";
			document.body.appendChild(_div);
			var pen=_load.getContext('2d');
			pen.translate(w/2,w/2);
			var x=0,y=0.4*w,angle=30;
			for(var i=0;i<360/angle;i++){
				var s=Math.sin(i*angle*Math.PI/180);
				var c=Math.cos(i*angle*Math.PI/180);
				var xx=y*s;
				var yy=c*y;
				pen.fillStyle="rgba(50,50,200,"+1/(1+i/10)+")";
				pen.beginPath();
			    pen.arc(xx,yy,w/(10+i*2),0,8.3);
		    	pen.closePath();
			    pen.fill();
			}
		}