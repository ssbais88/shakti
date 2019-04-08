<?php
// print_r($_POST);

$con = mysqli_connect("localhost","root","","ebay");

$a = $_POST['p_name'];
$b = $_POST['p_cate'];
$c = $_POST['p_price'];
$d = $_POST['detail'];
$e = $_POST['discount'];

$query = "INSERT INTO product(`pname`,`pcate`,`pprice`,`pdetail`,`pdiscount`) VALUES ('$a','$b','$c','$d','$e')";

mysqli_query($con, $query);

header("location:add_product.php");

?>