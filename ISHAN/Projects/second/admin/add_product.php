<?php
include("header.php");
?>

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-2">
			<h3>Add Any Product Here---</h3>
			<form action="save_addProduct.php" method="post">
				<div class="card">
					<div class="card-header">
						Detail of Product
					</div>
					<div class="card-body">
						<div class="form-group">
							<label>Product Name</label>
							<input type="text" name="p_name" class="form-control" placeholder="Enter Product Name Here">
						</div>
						<div class="form-group">
							<label>Product Category</label>
							<select class="form-control" name="p_cate">
								<option>Select</option>
								<option>Mobile</option>
								<option>Home Appliance</option>
								<option>Electronic</option>
								<option>Fashion</option>
							</select>
						</div>
						<div class="form-group">
							<label>Product Price</label>
							<input type="text" name="p_price" class="form-control" placeholder="Enter Your Price">
						</div>
						<div class="form-group">
							<label>Product Detail</label>
							<input type="text" name="detail" class="form-control" placeholder="Enter Product Name">
						</div>
						<div class="form-group">
							<label>Discount</label>
							<input type="text" name="discount" class="form-control" placeholder="Enter Discount Number">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Add Product" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>