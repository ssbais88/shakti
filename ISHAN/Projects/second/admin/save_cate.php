<?php

// print_r($_POST);

$con = mysqli_connect("localhost","root","","ebay");

$cat = $_POST['category'];

$query = "INSERT INTO category(`cate`) VALUES ('$cat')";

mysqli_query($con, $query);

header("location:add_cate.php");
?>