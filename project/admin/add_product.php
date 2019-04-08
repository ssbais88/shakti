<?php
include('header.php');
?>
<div class="container">
	<h3>Add New Product</h3>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<form action="save_product.php" method="post">
			<div class="card">
				<div class="card-header">
					Product Details
				</div>
				<div class="card-body">
						<div class="form-group">
							<label>Product Name</label>
							<input type="text" placeholder="Product Name" name="p_name" class="form-control">
						</div>

						<div class="form-group">
							<label>Product Price</label>
							<input type="text" placeholder="Product Price" name="p_price" class="form-control">
						</div>
						<div class="form-group">
							<label>Product Detail</label>
							<textarea class="form-control" placeholder="Detail" name="p_detail"></textarea>
						</div>
						<div class="form-group">
							<label>Product Category</label>
							<select name="p_cate" class="form-control">
								<option>Select</option>
								<option>Electronics</option>
								<option>Mobile</option>
								<option>Home Applicance</option>
							</select>
						</div>
						<div class="form-group">
							<label>Product Discount</label>
							<input type="text" placeholder="Product Discount" name="discount" class="form-control">
						</div>
						


				</div>
					<div class="card-footer">
						<input type="submit" value="Add" class="btn btn-primary">
					</div>
					</form>
			</div>
		</div>
	</div>
</div>

<?php
include('footer.php');
?>

