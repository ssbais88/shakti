<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#msg{
			display: inline-block;
		}
		#msg1{
			display: inline-block;
		}
	</style>
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
			setTimeout("demo()",100);	
		}
	</script>
</head>
<body>
	<button onclick="demo()">Go</button><br />
	<h1 id="msg">00</h1>
	<b>:</b>
	<h1 id=msg1>00</h1>
</body>
</html>