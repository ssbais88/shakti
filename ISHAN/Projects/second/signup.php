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
				<form action="save.php" method="post">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="full_name" class="form-control" placeholder="Enter your Full name">
					</div>
					<div class="form-group">
						<label>Email Id</label>
						<input type="text" name="username" class="form-control" placeholder="Enter your Email-id">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pass" class="form-control" placeholder="Enter your Password">
					</div>
					<div class="form-group">
						<label>Re-Password</label>
						<input type="password" class="form-control" placeholder="Enter Password Again">
					</div>
					<div class="form-group">
						<label>Gender </label>
						<input type="radio" name="gender" value="male">Male
						<input type="radio" name="gender" value="female">Female
					</div>
					<div class="form-group">
						<label>Address </label>
						<textarea class="form-control" name="add" placeholder="Enter Address Here..."></textarea>
					</div>
					<div class="form-group">
						<label>Contact</label>
						<input type="text" name="contact" class="form-control" placeholder="Enter Mobile or Phone">
					</div>
					<div class="form-group">
						<label>City</label>
						<select class="form-control" name="city">
							<option>SELECT</option>
							<option>INDORE</option>
							<option>BHOPAL</option>
							<option>JABALPUR</option>
							<option>KATNI</option>
							<option>UJJAIN</option>
							<option>DELHI</option>
						</select>
					</div>
			<div class="card-footer">
				<input type="submit" class="btn btn-success" value="Signup">
			</div>
			</form>
		</div>
	</div>
</div>
</div>
</div>
<?php
		include("footer.php");
?>

