<?php
include("header.php")
?>
	<div class="bg-secondary my-2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="bg-secondary text-light my-2 p-1">User Login</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<div class="card">
					<div class="card-header">
						<h4 class="m-0">Login</h4>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="" placeholder="Username" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="" placeholder="Password" class="form-control">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Submit" class="btn btn-success">
						<a href="index.php" class="btn btn-danger">Close</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
include("footer.php")
?>