<html>
<head>
	<title>calender</title>
</head>
<body>
	<table align="center" border="1"	cellpadding="20" cellspacing="0">
		<tr>
			<?php
				for ($i=1; $i <=31 ; $i++)
					 { 
				
						echo "</td><td>$i";
				if ($i==7 || $i==14 || $i==21 || $i==28)
					 {
								echo "</tr><tr>";
						}			
						}

			?>
		</tr>
	</table>
</body>
</html>