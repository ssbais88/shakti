<?php
// print_r($_POST);
$con=mysqli_connect("localhost","root","","babycare");
$a=$_POST['cate-name'];
$query="INSERT INTO CATEGORY(categoryname) VALUES('$a')";
mysqli_query($con,$query);
header("location:deshboard.php");
?>