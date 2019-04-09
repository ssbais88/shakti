<?php
include("header.php")
?>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3>LOGIN</h3>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label for="full">Full Name</label>
					<div class="input-group">
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="fa fa-user"></i>
							</span>
						</div>
						<input  id="full" type="text" name="full" placeholder="user name" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label for="pass">Password</label>
					<div class="input-group">
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="fa fa-lock"></i>
							</span>
						</div>
						<input type="text" name="pass" class="form-control" placeholder="password">
					</div>
				</div>
			</div>
			<div class="card-footer">
				<button class="btn btn-success">
					<a href="#" class="text-dark">LOGIN</a>
				</button>
			</div>
		</div>
	</div>
</div>
</body>
</html>