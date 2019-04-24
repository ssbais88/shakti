<?php
// print_r($_FILES);
// print_r($_POST);
// die;
include("../db.php");

$id = $_POST['imgid'];

// $name = $_FILES['image1']['name'];
$tmp_name = $_FILES['image1']['tmp_name']; 
// $tmp_name2 = $_FILES['imgid']['tmp_name2']; 
// $tmp_name3 = $_FILES['imgid']['tmp_name3']; 
// $tmp_name4 = $_FILES['imgid']['tmp_name4'];

$new_name1 = time().rand(100,10000);
// $new_name2 = time().rand(10,10000);
// $new_name3 = time().rand(1000,100000);
// $new_name4 = time().rand(1000,1000000);

$a = $_POST['image1'];
// $b = $_POST['image2'];
// $c = $_POST['image3'];
// $d = $_POST['image4'];

$query1 ="INSERT INTO more_image(product_id, image_name) VALUES ('$a', '$new_name1') WHERE id='$id'";
mysqli_query($con, $query1);
move_uploaded_file($tmp_name, "upload/".$new_name1);

// $query2 ="INSERT INTO more_image(product_id, image_name) VALUES ('$b', '$new_name2') WHERE id='$id'";
// mysqli_query($con, $query2);
// move_uploaded_file($tmp_name, "upload/".$new_name2);

// $query3 ="INSERT INTO more_image(product_id, image_name) VALUES ('$c', '$new_name3') WHERE id='$id'";
// mysqli_query($con, $query3);
// move_uploaded_file($tmp_name, "upload/".$new_name3);

// $query4 ="INSERT INTO more_image(product_id, image_name) VALUES ('$d', '$new_name4') WHERE id='$id'";
// mysqli_query($con, $query4);
// move_uploaded_file($tmp_name, "upload/".$new_name4);

header("location:view_pro.php");


?>