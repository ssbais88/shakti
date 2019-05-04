<?php
$con = mysqli_connect("localhost", "admin", "admin", "tss_11");
$a = $_POST['state_id'];
$que = "SELECT * FROM city WHERE state_id=$a";
$result = mysqli_query($con, $que);
echo "<option>Select</option>";
while($data=mysqli_fetch_assoc($result))
{
	echo "<option>".$data['city_name']."</option>";
}

?>