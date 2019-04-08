<?php
include("header.php")
?>
	<div class="bg-secondary my-2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="bg-secondary text-light my-2 p-1">User Signup</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<div class="card">
					<div class="card-header">
						<h4 class="m-0">Signup</h4>
					</div>
					<div class="card-body">
						<form action="save.php" method="post">
						<div class="form-group">
							<label>Full Name</label>
							<input type="text" name="fullname" placeholder="Full Name" class="form-control">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" placeholder="Email" class="form-control">
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
							<input type="radio" name="gender" value="Male" >Male
							<input type="radio" name="gender" value="Female" >Female
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" name="add" placeholder="Address"></textarea>
						</div>
						<div class="form-group">
							<label>City</label>
							<select class="form-control" name="city">
								<option>Select</option>
								<option>Indore</option>
								<option>Bhopal</option>
								<option>Mumbai</option>
								<option>Pune</option>
								<option>Udaipur</option>
							</select>
						</div>
						<div class="form-group">
							<label>Contact</label>
							<input type="text" name="contact" placeholder="Contact" class="form-control">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Submit" class="btn btn-success">
						<a href="index.php" class="btn btn-danger">Close</a>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php
include("footer.php")
?>