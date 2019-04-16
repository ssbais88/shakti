<?php

 // print_r($_POST);
$con = mysqli_connect("localhost", "root", "password", "myproject");



$a = $_POST['full_name'];
$b = $_POST['username'];
$c = $_POST['password'];

$c = sha1($c);
$d = $_POST['gender'];
$e = $_POST['address'];
$f = $_POST['contact'];
$g = $_POST['city'];


$query="INSERT INTO project (full_name, user_name, password, gender, address, contact, city) VALUES ('$a', '$b', '$c', '$d', '$f', '$e', '$g')";

mysqli_query($con, $query);

header("location:login.php");




?>