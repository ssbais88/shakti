<?php 
 include("header.php");
 ?>
   
    <div class="container ">
    	<div class="row">
    		<div class="col-md-9 border p-4">
           <div class="row">
           	 <div class="col-md-12">
           	 	<h4 class="bg-secondary text-light px-4 py-2">create account</h4>
           	 </div>

           </div>
           <div class="row">
           	<div class="col-md-8 offset-md-2">
           	 <div class="card">
           	 	<div class="card-header">
           	 		<h4>Signup</h4>
           	 	</div>
           	 	<div class="card-body">
           	 		<form action="kkk.php" method="post">
           	 			<div class="form-group">
									<label>Full Name</label>
									<input type="Text" name="full_name" placeholder="Full Name" class="form-control">
								</div>
								<div class="form-group">
									<label>Username/Email</label>
									<input type="Text"  name="user" placeholder="Username" class="form-control">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="pass" placeholder="Password" class="form-control">
								</div>
								<div class="form-group">
									<label>Re-Password</label>
									<input type="password" placeholder="Re-Password" class="form-control">
								</div>
								<div class="form-group">
									<label>Gender</label>
									<input type="radio" value="gender" name="gender" />Male
									<input type="radio" value="gender" name="gender" />Female
								</div>
								<div class="form-group">
									<label>Address</label>
									<textarea class="form-control" placeholder="Address" name="add"></textarea>
								</div>
								<div class="form-group">
									<label>Contact</label>
									<input type="text" placeholder="Contact" name="contact" class="form-control">
								</div>
								<div class="form-group">
									<label>City</label>
									<select class="form-control" name="city">
										<option>Select</option>
										<option>Indore</option>
										<option>Bhopal</option>
										<option>Mumbai</option>
										<option>Pune</option>
										<option>Select</option>
									</select>
								</div>
           	 		
           	 	</div>
           	 	<div class="card-footer">
           	 		<input type="submit" value ="Signup" class="btn btn-success">
           	 	</div>
           	 	</form>
           	 	</div>
           	 	</div>
           	 </div>
    			
    		</div>
    	</div>
    </div>


 <?php 
 include("footer.php")
  ?>