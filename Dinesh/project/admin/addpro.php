<?php 
    include('header.php');
 ?>

<div class="container">
	<h3>add new product</h3>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Product details
				</div>
				<div class="card-body">
					<form action="savepro.php" method="POST"> 
						<div class="form-group">
							<LABEL>Product name</LABEL>
							<input type="text" name="p_name" placeholder="product name" class="form-control">
						</div>
						<div class="form-group">
							<LABEL>Product price</LABEL>
							<input type="text" name="p_price" placeholder="product price" class="form-control">
						</div>
						<div class="form-group">
							<LABEL>Product details</LABEL>
							<input type="text" name="p_detail" placeholder="product details" class="form-control">
						</div>
						<div class="form-group">
							<LABEL>Product category</LABEL>
							<select class="form-control" name="p_cate">
								<option>Select</option>
								<option>Electronics</option>
								<option>Mobile</option>
								<option>Home Applicance</option>
							</select>
						</div>
						<div class="form-group">
							<LABEL>product discount</LABEL>
							<input type="text" name="discount" class="form-control" placeholder="product discount">
						</div>
						<div class="card-footer">
							<input type="submit" value="add" class="btn btn-primary">
						</div>
					</form>
				</div> 
			</div>
		</div>
		
	</div>
</div>
<?php 
     include('footer.php');
 ?>