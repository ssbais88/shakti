<?php
// print_r($_POST);
<<<<<<< HEAD
$con = mysqli_connect("localhost", "admin", "admin", "tss_11");
=======
include("../db.php");
>>>>>>> 27f339788b07ab55c1ea115ece0da473526160bd

$a = $_POST['p_name'];
$b = $_POST['p_price'];
$c = $_POST['p_detail'];
$d = $_POST['p_cate'];
$e = $_POST['discount'];

$query = "INSERT INTO product (product_name, product_price, product_detail, product_category, discount) VALUES ('$a', '$b', '$c', '$d', '$e')";

mysqli_query($con, $query);
header("location:add_product.php");
?>