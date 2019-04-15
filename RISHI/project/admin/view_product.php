<?php
include("header.php");
include("../db.php");

$query="SELECT * FROM addproduct";
$result=mysqli_query($con,$query);

?>
<div class="container">
	<h4>View all product</h4>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-info table-hover">
			<tr>
				<th>S.no.</th>
				<th>Product name</th>
				<th>Product category</th>
				<th>Product price</th>
				<th>Product discount</th>
			</tr>
			<?php
			while($data=mysqli_fetch_assoc($result))
			{?>
			<tr>
				<td><?php echo $data['id']; ?></td>
				<td><?php echo $data['productname']; ?></td>
				<td><?php echo $data['productcate']; ?></td>
				<td><?php echo $data['productprice']; ?></td>
				<td><?php echo $data['productdiscount']; ?></td>
			</tr>		
		<?php	
		}?>
			</table>
		</div>
		
	</div>
</div>

<?php
include("footer.php");
?>
