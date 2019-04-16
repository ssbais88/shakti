<?php
include("db.php");
// print_r($_POST);

$name = $_POST['sname'];
$fees = $_POST['fees'];
$age = $_POST['age'];
$class = $_POST['class'];
$contact = $_POST['contact'];
$rollnum = $_POST['rollnum'];

$query = "INSERT INTO student(name,fees,age,class,contact,rollno) VALUES('$name','$fees','$age','$class','$contact','$rollnum')";

mysqli_query($con, $query);

header("location:login.php");

?>