<?php
include("../db.php");

// print_r($_GET);
// die;


$a = $_GET['p_id'];

// $query ="SELECT * FROM more_image";
// $result = mysqli_query($con, $query);

$query =" SELECT * FROM more_image WHERE id='$a'";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);

include("header.php");
?>
<style type="text/css">
	.s_img
	{
		border: 1px solid #000;
		padding: 5px;
		border-radius: 5px;
	}
</style>
<script type="text/javascript">
	function demo(a)
	{
		document.getElementById("product_id").setAttribute("src",a);
	}
</script>
<div class="row">
	<div class="col-md-12">
		<h3 class="text-center">View More Images</h3>
<div style="margin:10px auto; width:600px; height:550px; border:1px solid #ccc; text-align: center;">
	
	<img src="upload/<?php echo $data['image_name']; ?>" id="product_id" height="400" width="400">
	<hr/>
	<img src="upload/<?php echo $data['image_name']; ?>" height="100" width="100" onmouseover="demo('product_id')" class="s_img">
	<img src="upload/<?php echo $data['image_name']; ?>" height="100" width="100" onmouseover="demo('product_id')" class="s_img">
	<img src="upload/<?php echo $data['image_name']; ?>" height="100" width="100" onmouseover="demo('product_id')" class="s_img">
	<img src="upload/<?php echo $data['image_name']; ?>" height="100" width="100" onmouseover="demo('product_id')" class="s_img">

</div>
	</div>
</div>

