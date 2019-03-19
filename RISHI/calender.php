<!DOCTYPE html>
<html>
<head>
	<title>calender</title>
	<style>
		tr{
			color: red;
		}
	</style>
</head>
<body>
<table 
align="center" cellspacing="0" cellpadding="8" border="1">
<tr>

	<?php
	for($i=1;$i<=31;$i++)
	{
		echo "<td>".$i."</td>";
		if($i==7 || $i==14 || $i==21 || $i==28)
		{
			echo "</tr><tr>";
		}
	}

	?>
</tr>
</table>
</body>
</html>