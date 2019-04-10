<?php
include ('dashboard.php');

?>

<br>

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="addprodsave.php" method="post">
				<div class="card">
					<div class="card-header">
						<h1>Add Product</h1>
					</div>
					<div class="card-body">
						<div class="form-body">
						<label>Product Name</label>
						<input type="text" name="P_name" class="form-control" placeholder="Product Name">
						</div>
						<div class="form-body">
						<label>Product Price</label>
						<input type="text" name="P_price" class="form-control" placeholder="Product price">							
						</div>
						<div class="form-body">
						<label>Product_details</label>
						<input type="text" name="P_details" class="form-control" placeholder="Product details">							
						</div>
					</div>
					<div class="card-footer">
						<button class="btn btn-success">Add Product</button>
					</div>
					
				</div>
			</form>
		</div>
	</div>
	
</div>