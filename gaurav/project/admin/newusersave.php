<?php
 $con = mysqli_connect("localhost","root","","onlineshop");
 
 $a = $_POST['username'];
 $b = $_POST['password'];
 $c = $_POST['re_password'];

 $query	= "insert into adminusers(username,password,repassword) values('$a',
 '$b','$c')";

 mysqli_query($con,$query);
 header("location:create_user_admin.php");



?>