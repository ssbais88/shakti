<?php

// print_r($_POST);

$con = mysqli_connect("localhost","root","","onlineshop");

$a = $_POST['full_name'];
$b = $_POST['user_name'];
$c = $_POST['pass'];
$d = $_POST['gender'];
$e = $_POST['add'];
$f = $_POST['city'];
 
$query = "INSERT into user (full_name, user_name, password, gender,address,city) 
VALUES('$a','$b','$c','$d','$e','$f')";

mysqli_query($con,$query);

header("location:signin.php");

?>
