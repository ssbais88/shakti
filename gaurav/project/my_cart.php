<?php
$con = mysqli_connect("localhost","root","","onlineshop");
include("header.php");
if(isset($_GET['admincategory']))
{
	$m = $_GET['admincategory'];
	$query = "SELECT * FROM addproduct WHERE p_category='$m'";
	$result = mysqli_query($con,$query);
}
else
{
	$query = "SELECT * FROM addproduct";
	$result = mysqli_query($con,$query);
}

?>
<div class="col-md-9">
	<div class="row">
		<?php
		$x = $_COOKIE['cart'];
		$arr = explode("#",$x);
		$total = 0;
		foreach($arr as $y)
		{

			$query = "SELECT * FROM addproduct where id = $y";
			$result = mysqli_query($con,$query);
			$data = mysqli_fetchassoc($result);
			$total = $data['product_price'];

		?>
		<div class="col-md-12">
		<h2>Your cart</h2>
		<a href="">Clear cart</a>
	</div>
	</div>	
    <div class="row">
    	
			<div class="card">
				<div class="card-header">
					<?php ?>
				</div>
				<div class="card-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
				</div>
				<div class="card-footer">
					<button></button>
				</div>
		</div>
	</div>
</div>
	
</div>