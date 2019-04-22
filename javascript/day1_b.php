<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		function demo()
		{
			var a = document.getElementById("f_num").value;
			var b = document.getElementById("s_num").value;
			
			var x = parseInt(a);
			var y = parseInt(b);

			var c = x+y;

			alert("Your Ans is : "+c);
			
		}
	</script>
</head>
<body>
First Num <input type="text" id="f_num"/>
<Br />
<Br />
Second Num <input type="text" id="s_num"/>
<Br />
<Br />
<button onclick="demo()">+</button>
<button onclick="">-</button>
<button onclick="">/</button>
<button onclick="">x</button>
</body>
</html>