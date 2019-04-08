<?php
// print_r($_POST);
include("db.php");

$u = $_POST['username'];
$p = $_POST['password'];

$query = "SELECT * FROM user WHERE username='$u'";
$result=mysqli_query($con, $query);

if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	// This function convert object to assocative array for database
	// print_r($data);
	if($data['password']==$p)
	{
		echo "yes";
	}
	else
	{
		$_SESSION['msg']="This Password is Incorrect !";
		header("location:login.php");
	}	
}
else
{
	$_SESSION['msg']="This Username and Password is Incorrect !";
	header("location:login.php");
}

?>