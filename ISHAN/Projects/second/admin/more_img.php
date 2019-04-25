<?php
include("../db.php");

// print_r($_GET);
// die;


$a = $_GET['p_id'];

$query ="SELECT * FROM more_image";
$result = mysqli_query($con, $query);

include("header.php");

$query =" SELECT * FROM more_image WHERE id='$a'";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);


?>

