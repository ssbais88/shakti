<?php

// print_r($_POST);

$con = mysqli_connect("localhost","root","","ebay");


$a = $_POST['full_name'];
$b = $_POST['username'];
$c = $_POST['pass'];
$d = $_POST['gender'];
$e = $_POST['add'];
$f = $_POST['contact'];
$g = $_POST['city'];

echo $query = "INSERT INTO user(full_name,username,password,gender,address,contact,city) VALUES 
('$a','$b','$c','$d','$e','$f','$g')";

// print_r($query);
mysqli_query($con, 	$query);

// header("location:login.php");

?>