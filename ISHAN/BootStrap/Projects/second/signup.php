<?php
include("header.php");
?>
<div class="col-md-9 mb-1">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bg-secondary py-4 pl-2 text-light">Registration Page</h4>
				</div>
			</div>
<div class="row">
	<div class="col-sm-8 offset-2">
		<div class="card">
			<div class="card-body">
				<label>Full Name</label>
				<input type="text" name="" class="form-control" placeholder="Enter your Full name">
				<label>Email Id</label>
				<input type="text" name="" class="form-control" placeholder="Enter your Email-id">
				<label>Password</label>
				<input type="password" name="" class="form-control" placeholder="Enter your Password">
				<label>Gender :</label>
				<input type="radio" name="gender">Male
				<input type="radio" name="gender">Female
				<input type="radio" name="gender">Other
			</div>
			<div class="card-footer">
				<input type="submit" name="" class="btn btn-success" value="Signup">
			</div>
		</div>
	</div>
</div>