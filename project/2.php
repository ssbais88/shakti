<?php
// print_r($_FILES);
$a = $_FILES['image']['name'];
$b = $_FILES['image']['size'];
$c = $_FILES['image']['type'];
$d = $_FILES['image']['error'];
$e = $_FILES['image']['tmp_name'];
move_uploaded_file($e, "demo/".$a);
// print_r($_POST);

?>