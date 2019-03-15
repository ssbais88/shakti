<?php
$a = 4;
$b = 5;
$c = $a+$b;
echo "$c";
?>
<br/>
<br/>
<br/>
<?php
$x = 5;
$y = 6;
$z = $x + $y;
echo "$z";
?>
<br/>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h2>Print table of 5</h2></center>
  <table align="center" border="1" cellpadding="10" cellspacing="0">
  	<tr><td>5</td>
         <td>*</td>
         <td>1</td>
         <td>=</td>
         <td>5</td>
  	</tr>
  	<tr><td>5</td>
         <td>*</td>
         <td>2</td>
         <td>=</td>
         <td>10</td>
  	</tr>
  	<tr><td>5</td>
         <td>*</td>
         <td>3</td>
         <td>=</td>
         <td>15</td>
  	</tr>
  	<tr><td>5</td>
         <td>*</td>
         <td>4</td>
         <td>=</td>
         <td>20</td>
  	</tr>
  	<tr><td>5</td>
         <td>*</td>
         <td>5</td>
         <td>=</td>
         <td>25</td>
  	</tr>
    <tr><td>5</td>
         <td>*</td>
         <td>6</td>
         <td>=</td>
         <td>30</td>
  	</tr>
  	<tr><td>5</td>
         <td>*</td>
         <td>7</td>
         <td>=</td>
         <td>35</td>
  	</tr>
  	<tr><td>5</td>
         <td>*</td>
         <td>8</td>
         <td>=</td>
         <td>40</td>
  	</tr>
  	<tr><td>5</td>
         <td>*</td>
         <td>9</td>
         <td>=</td>
         <td>45</td>
  	</tr>
  	<tr><td>5</td>
         <td>*</td>
         <td>10</td>
         <td>=</td>
         <td>50</td>
  	</tr>

  </table><center>
  <?php 
    for ($i=1; $i<=10; $i++)
    { ?><br>
        <?php 
    	for ($j=1; $j<=10;$j++)
    	{
    	echo "$i";
        }      
    }

  ?></center>
</body>
</html>