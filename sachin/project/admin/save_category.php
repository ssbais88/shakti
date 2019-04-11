





		<?php
// print_r($_POST);



$con = mysqli_connect("localhost","root","password","myproject");
 



$a = $_POST['cate_name'];

$query = "INSERT INTO category (cate_name) VALUES ('$a')";

mysqli_query($con, $query);
header("location:add_category.php");
?>