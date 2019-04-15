<?php
// print_r($_POST);
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
$name=$_FILES['image']['name'];
$size=$_FILES['image']['size'];
$tmp_name=$_FILE['image']['tmp_name'];
$arr=explode(".", $name);
$ext=end($arr);
if ($ext=="jpg"||$ext="jpeg"||$ext="png"||$ext="gif")
{
	if  ($size<=(1024*1024*1))
	{
		if ($_FILES['image']['error']==0) 
		{
			$a=$_POST['pro_name'];
			$b=$_POST['pro_price'];
			$c=$_POST['pro_detail'];
			$d=$_POST['pro_cate'];
			$e=$_POST['pro_discount'];
			$image_name=time().rand(1000, 100000).".".$ext;

			$query="INSERT INTO addproduct(productname,productprice,productdetail,productcategory,productdiscount,imagename) VALUES ('$a','$b','$c','$d','$e','$image_name')";
			move_uploaded_file($tmp_name, "upload/".$image_name);
			mysqli_query($con, $query);

			header("location:addproduct.php");
		}
		else
		{
			$_SESSION['msg']="Something Went Wrong";
			header("location:addproduct.php");
		}
	}
	else
	{
		$_SESSION['msg']="This file size is too larg";
		header("location:addproduct.php");
	}
}
else
{
	$_SESSION['msg']="This file type not allowed";
	header("location:addproduct.php");
}
?>