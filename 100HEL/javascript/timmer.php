<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var a=0;
		var b=0;
		function demo()
		{
			b+=1;
			document.getElementById("msg").innerHTML=a;
			document.getElementById("msg1").innerHTML=b;
			if (b==59) 
			{
				a+=1;
				b=0;
			}
			setTimeout("demo()",1000);	
		}
	</script>
</head>
<body>
	<button onclick="demo()">Go</button><br />
	<h1><span id="msg">00</span>
	:
	<span id=msg1>00</span></h1>
</body>
</html>