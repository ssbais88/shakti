<?php
// print_r($_POST);


$con = mysqli_connect("localhost","root","password","e_commerce");
session_start();

$u=$_POST['full'];
$p=$_POST['pass'];


$query="SELECT * FROM user WHERE username='$u'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)

	{
		$data = mysqli_fetch_assoc($result);
		
		// print_r($data);
		if ($data['password']==$p) {
			echo "Yes";
		}
		else{

			$_SESSION['msg']="This password is Incorrect !";
			header("location:login.php");
		}

	}
	else{

		$_SESSION['msg']="This username and password is Incorrect !";
			header("location:login.php");
	}
?>