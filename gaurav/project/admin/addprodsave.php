<?php
 // print_r($_POST);

$con = mysqli_connect("localhost","root","","onlineshop");

$a = $_POST['P_name'];
$b = $_POST['P_price'];
$c = $_POST['P_details'];
 
$query = "INSERT INTO addproduct(p_name, p_price, p_details) VALUES('$a','$b','$c')";

mysqli_query($con,$query);
header("location:addproduct.php");

?>