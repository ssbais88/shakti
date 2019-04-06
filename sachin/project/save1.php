	<?php
// print_r($_POST);

$con = mysqli_connect("localhost", "root", "password", "rekword");


$a = $_POST['full_name'];
$b = $_POST['username'];
$c = $_POST['password'];
$d = $_POST['address'];
$e = $_POST['gender'];
$f = $_POST['city'];
$g = $_POST['contact'];


$query="INSERT INTO yadav (full_name, user_name, password, address, city, gender, contact) VALUES ('$a', '$b', '$c', '$d', '$f', '$e', '$g')";

mysqli_query($con, $query);

header("location:login.php");


?>