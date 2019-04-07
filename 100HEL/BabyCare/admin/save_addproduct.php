<?php
// print_r($_POST);
$con=mysqli_connect("localhost","root","","babycare");

$a=$_POST['pro_name'];
$b=$_POST['pro_price'];
$c=$_POST['pro_detail'];
$d=$_POST['pro_cate'];
$e=$_POST['pro_discount'];

$query="INSERT INTO ADDPRODUCT(productname,productprice,productdetail,productcategory,productdiscount) VALUES ('$a','$b','$c','$d','$e')";

mysqli_query($con, $query);

header("location:deshboard.php");
?>