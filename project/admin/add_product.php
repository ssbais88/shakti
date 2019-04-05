<?php
include('header.php');
?>
<div class="container">
	<h3>Add New Product</h3>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Product Details
				</div>
				<div class="card-body">
					<form>
						<div class="form-group">
							<label>Product Name</label>
							<input type="text" placeholder="Product Name" class="form-control">
						</div>

						<div class="form-group">
							<label>Product Price</label>
							<input type="text" placeholder="Product Price" class="form-control">
						</div>
						<div class="form-group">
							<label>Product Detail</label>
							<textarea class="form-control" placeholder="Detail"></textarea>
						</div>
						<div class="form-group">
							<label>Product Category</label>
							<select class="form-control">
								<option>Select</option>
								<option>Electronics</option>
								<option>Mobile</option>
								<option>Home Applicance</option>
							</select>
						</div>
						<div class="form-group">
							<label>Product Discount</label>
							<input type="text" placeholder="Product Discount" class="form-control">
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

