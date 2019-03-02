<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>error!-yhydy.cn</title>
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="//<?=WEB_NAME?>/images/favicon.ico" media="screen" />
    <style>
		body{
			background:#fff;
		}
		body div:nth-child(1){
			margin:50px;
			border:1px solid #bbb;
			box-shadow:0 0 10px #bbb;
			min-width: 320px;
			border-radius: 10px;
		}
		div span:nth-child(1){
			display: inline-block;
			padding: 10px;
			font-size: 150%;
		}
		div span:nth-of-type(2){
			display: inline-block;
			padding: 10px;
			font-size: 95%;
		}
		hr{
			margin:0;
		}
		input{
			margin-left: 50px;
			padding: 5px 20px;
			border-radius: 10px;
			background:#eee;
		}
        input+input{
            margin-left:25px;
        }
		input+span{
			vertical-align:bottom;
			font-size: 95%;
			padding-left: 20px;
		}
	</style>
</head>
<body>
     <div>
     	<span><b>404 Page Not Found</b></span>
     	<hr>
     	<span>The page you requested was not found.</span>
     </div>
     <input type="button" value="Return" onClick="history.back()">
     <input type="button" value="GoMain" onClick="returnMain();">
     <span id="mes">Will Go Main In 10 Second!</span>
     <script>
	     function returnMain(){
			 location.href='//<?=WEB_NAME?>';
		 }
		 var time=10;
		 setInterval(function(){
			 mes.innerHTML="Will Go Main In "+time+" Second!";
			 time--;
			 if(time<0)returnMain();
		 },1000);
	</script>
</body>
</html>