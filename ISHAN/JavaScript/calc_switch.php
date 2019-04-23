<!DOCTYPE html>
<html>
<head>
	<title>Calc Using Switch Case</title>
	<script>
		function calc()
		{
			var a = document.getElementById("f_num").value;
			var b = document.getElementById("s_num").value;

			var x = parseInt(a);
			var y = parseInt(b);

		}
	</script>
</head>
<body>
<br/>
<br/>
First Num : <input type="text" id="f_num">
<br/>
Second Num : <input type="text" id="s_num">
<br/>
<button onclick="calc(1)">OK</button>
<button onclick="calc(2)">OK</button>
<button onclick="calc(3)">OK</button>
<button onclick="calc(4)">OK</button>
</body>
</html>