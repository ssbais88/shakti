<?php
// print_r($_POST);

$con = mysqli_connect("localhost","root","","ebay");
 session_start();

$u = $_POST['username'];
$p = $_POST['password'];

$query = "SELECT * FROM user WHERE username='$u'";

$result = mysqli_query($con, $query);

if (mysqli_num_rows($result)==1)
 {
	$data = mysqli_fetch_assoc($result);
	//This fn is convert Object into a associative array format
	if ($data['password']==$p)
	{
		echo "Yes";
	}
	else{

		$_SESSION['msg'] = "This password is Incorrect !";
		header("location:login.php");
	}
}
else{

	$_SESSION['msg'] = "This username and password is  incorrecr !";
	header("location:login.php");
}
?>