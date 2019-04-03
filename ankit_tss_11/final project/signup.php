<?php
include("header.php");
include("slider.php")
?>
<div class="container mt-3">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<div class="card">
				<div class="card-header">
					<h3>Sign up</h3>
				</div>
				<div class="card-body">
					<form class="font-weight-bold">
						<div class="form-group">
							<label>Full-Name</label>
							<input type="text" class="form-control" placeholder="Enter your full name"> 
						</div>
						<div class="from-group">
							<label>Email id</label>
							<input type="text" class="form-control" placeholder="Enter your mail mail id">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control">
						</div>
						<div class="form-group">
							<label>Re-type Password</label>
							<input type="password" class="form-control">
						</div>
						<div class="form-group">
							<label>Gender</label><br>
							<div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" name="gender">
									<label class="form-check-label" class="">Male</label>
							</div>
							<div class="form-check form-check-inline">
								<input type="radio" class="form-check-input" name="gender">
									<label class="form-check-label" class="">Female</label>
							</div>
						</div>
						<div class="form-group">
							<label>Contact No</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" placeholder="Enter your deliver address"></textarea>
						</div>
					</form>
				</div>
				<div class="form-footer">
					<button class="btn btn-success">Sign Up</button>
				</div>
			</div>
		</div>
	</div>
</div>