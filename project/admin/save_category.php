<?php
// print_r($_POST);
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
$a = $_POST['cate_name'];

$query = "INSERT INTO category (category_name) VALUES ('$a')";

mysqli_query($con, $query);
header("location:add_category.php");
?>