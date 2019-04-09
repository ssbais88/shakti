<?php
// print_r($_POST);
<<<<<<< HEAD
$con = mysqli_connect("localhost", "admin", "admin", "tss_11");

=======
include("../db.php");
>>>>>>> 27f339788b07ab55c1ea115ece0da473526160bd
$a = $_POST['cate_name'];

$query = "INSERT INTO category (category_name) VALUES ('$a')";

mysqli_query($con, $query);
header("location:add_category.php");
?>