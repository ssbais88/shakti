<?php
	   print_r($_POST);
 
 
 	$con = mysqli_connect("localhost","root","","pay_kart");

	$a = $_POST['fullname'];
	$g = $_POST['email'];
	$b = $_POST['password'];
	$c = $_POST['gender'];
	$d = $_POST['contact'];
	$e = $_POST['add'];
	$f = $_POST['city'];


	$quiry = "INSERT INTO user (full_name,email_id,password,gender,contact_no,address,city) VALUES ('$a','$g','$b','$c','$d','$e','$f')";

 	mysqli_query($con, $query);

header("location:login.php")
?>