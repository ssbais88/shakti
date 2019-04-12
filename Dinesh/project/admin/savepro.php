<?php 
     // print_r($_POST);
include("../db.php");

$a=$_POST['p_name'];
$b=$_POST['p_price'];
$c=$_POST['p_detail'];
$d=$_POST['p_cate'];
$e=$_POST['discount'];

 $query="insert into product(product_name,product_price,product_detail,product_category,discount) values ('$a','$b','$c','$d','$e')";
mysqli_query($con,$query);
header("location:addpro.php");

 ?>