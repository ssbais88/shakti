<?php 
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}

include ('header.php');
?>
   <div class="container">
   	<h2>Add Product</h2>
   	 <div class="row">
        <div class="col-md-6 offset-md-3">
        	<form action="save_product.php" method="post">
	          <div class="card">
		        <div class="card-header">
		        	<h4>product detail</h4>
		        </div>
		        <div class="card-body">
			       <div class="form-group">
				     <label>Product Name</label>
					        <input type="text" name="p_name"class="from-control" placeholder="product name"></div>
				<div class="form-group">
				  <label>Product Price</label>
				<input type="text"name="p_price" class="from-control" placeholder="price"></div>
                    <div class="form-group">
				<label>Product Detail </label>
				 <textarea   name="p_detail" class="form-control"></textarea></div>
                     <div class="form-group">
				<label>Product Category</label>
				<select  name="p_cate"class="form-control" >
                         <option>electronick</option>
                         <option>mobile</option>
                         <option>home applicance</option></select>
				</div>

                  <div class="from-group">
				<label>Product Discount</label>
				<input type="text" name="discount" class="from-control" placeholder="discount"></div>




			</div>


			<div class="card-footer">
				<input type="submit" value="add" class="btn btn-success"></div></div></form>
</div></div></div>



<?php 

include('footer.php');
?>