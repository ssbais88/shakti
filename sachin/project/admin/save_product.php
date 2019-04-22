<?php
// print_r($_POST);



include("../db.php");

if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}

$name = $_FILES['image']['name'];
$size = $_FILES['image']['size'];
$tmp_name = $_FILES['image']['tmp_name'];

$arr =explode(".", $name);
$ext = end($arr);
if ($ext =="jpg"|| $ext =="jpeg" || $ext =="png" || $ext =="gif") 
{
	if ($size = (1024*1024*1))
	{ 
$newname= time().rand(10000,100000).".".$ext;
$a =$_POST['p_name'];
$b = $_POST['p_price'];
$c = $_POST['p_detail'];
$d = $_POST['p_cate'];
$e = $_POST['discount'];

$query ="INSERT INTO product (p_name,p_price,p_detail,p_cate,discount,image_name)VALUES ('$a', '$b', '$c', '$d', '$e','$newname')";
  move_uploaded_file($tmp_name,"upload/".$newname);
mysqli_query($con, $query);
 header("location:add_product.php");
	}

	else
	{
   
$_SESSION['msg'] = "file is to large";
header("location:add_product.php");

	}





} 

else {
	$_SESSION['msg'] = "file extension not match";
header("location:add_product.php");
}



?>