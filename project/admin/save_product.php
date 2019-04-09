<?php
// print_r($_POST);
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
$a = $_POST['p_name'];
$b = $_POST['p_price'];
$c = $_POST['p_detail'];
$d = $_POST['p_cate'];
$e = $_POST['discount'];

$query = "INSERT INTO product (product_name, product_price, product_detail, product_category, discount) VALUES ('$a', '$b', '$c', '$d', '$e')";

mysqli_query($con, $query);
header("location:add_product.php");
?>