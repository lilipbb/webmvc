<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script>
		function CheckCanvas(){
			var glcanvas=document.getElementById("glcanvas");
			gl=glcanvas.getContext("webgl")||glcanvas.getContext("experimental-webgl")
			if(!gl){
				alert("您的浏览器太古老，请进行更新")
			}
		}
		function Render(){
			gl.clearColor(1,0,0,0);
			gl.clear(gl.COLOR_BUFFER_BIT);
			requestAnimationFrame(Render);
		}
		window.onload=function(){
			CheckCanvas();
			Render();
		};
	</script>
</head>
<body>
	<div style="width:100%;height: 300px;position: relative;background: #FF0004">
	<canvas id="glcanvas" width="400" height="300">
		Your Brother is too old
	</canvas>
	<div id="glInfo" style=""></div>
	</div>
</body>
</html>
