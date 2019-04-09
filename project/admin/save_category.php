<?php
// print_r($_POST);
<<<<<<< HEAD
$con = mysqli_connect("localhost", "admin", "admin", "tss_11");

=======
include("../db.php");
<<<<<<< HEAD
>>>>>>> 27f339788b07ab55c1ea115ece0da473526160bd
=======
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
>>>>>>> 4a75da451727a7d0dbd3f04d9a842c1a3932d3c8
$a = $_POST['cate_name'];

$query = "INSERT INTO category (category_name) VALUES ('$a')";

mysqli_query($con, $query);
header("location:add_category.php");
?>