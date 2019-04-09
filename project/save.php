		<?php
	// print_r($_POST);

<<<<<<< HEAD
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



=======
include("db.php");
$a = $_POST['full_name'];
$b = $_POST['username'];
$c = $_POST['pass'];

$c = sha1($c);

$d = $_POST['add'];
$e = $_POST['gender'];
$f = $_POST['city'];
$g = $_POST['contact'];
$query="INSERT INTO user (full_name, username, password, address, city, gender, contact) VALUES ('$a', '$b', '$c', '$d', '$f', '$e', '$g')";

mysqli_query($con, $query);
header("location:login.php");
?>
>>>>>>> 4a75da451727a7d0dbd3f04d9a842c1a3932d3c8
