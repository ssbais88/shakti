<?php
// print_r($_POST);

$con = mysqli_connect("localhost", "admin", "admin", "tss_11");


$a = $_POST['full_name'];
$b = $_POST['username'];
$c = $_POST['pass'];
$d = $_POST['add'];
$e = $_POST['gender'];
$f = $_POST['city'];
$g = $_POST['contact'];


$query="INSERT INTO user (full_name, username, password, address, city, gender, contact) VALUES ('$a', '$b', '$c', '$d', '$f', '$e', '$g')";

mysqli_query($con, $query);

header("location:login.php");


?>