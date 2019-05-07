<?php
$con = mysqli_connect("localhost", "root","password","tss_11");


$a = $_POST['demo1'];
$b = $_POST['demo2'];

$query = "INSERT INTO user (name, fee) VALUES ('$a', '$b')";
mysqli_query($con, $query);


?>