<?php
session_start();
$con = mysqli_connect("localhost","root","","onlineshop");

$u = $_POST['username'];
$p = $_POST['password'];
$query = "select * from user where user_name = '$u'";
$result = mysqli_query($con,$query);
if (mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	// print_r($_data);
	if ($data['password']==$p) {
		$_SESSION['id'] = $_data['id'];
		$_SESSION['name'] = $_data['name'];
		$_SESSION['is_user_logged_in']=true;
		header("location:myaccount.php");
	} 
	else
	{
	$_SESSION['msg'] = "This password is incorrect!";
	header("location:signin.php");
	}
	

}
else
{
	$_SESSION['msg'] = "This user name and password is incorrect!";
	header("location:signin.php");
	
}

?>