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
				<form>
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="" class="form-control" placeholder="Enter your Full name">
					</div>
					<div class="form-group">
						<label>Email Id</label>
						<input type="text" name="" class="form-control" placeholder="Enter your Email-id">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="" class="form-control" placeholder="Enter your Password">
					</div>
					<div class="form-group">
						<label>Gender </label>
						<input type="radio" name="gender">Male
						<input type="radio" name="gender">Female
						<input type="radio" name="gender">Other
					</div>
					<div class="form-group">
						<label>Address </label>
						<textarea class="form-control" placeholder="Enter Address Here..."></textarea>
					</div>
					<div class="form-group">
						<label>Contact</label>
						<input type="text" name="" placeholder="Enter Mobile or Phone">
					</div>
					<div class="form-group">
						<label>City</label>
						<select class="form-control">
							<option>SELECT</option>
							<option>INDORE</option>
							<option>BHOPAL</option>
							<option>JABALPUR</option>
							<option>KATNI</option>
							<option>UJJAIN</option>
						</select>
					</div>
				</form>
			<div class="card-footer">
				<input type="submit" name="" class="btn btn-success" value="Signup">
			</div>
		</div>
	</div>
</div>