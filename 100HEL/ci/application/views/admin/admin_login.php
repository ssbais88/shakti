<div class="container mt-4" style="min-height: 600px;">
	<h2>Admin Login</h2>
	<div class="row my-4">
		<div class="col-md-6 offset-3">
			<form action="<?php echo site_url('admin/admin_auth'); ?>" method="post">
				<div class="card">
					<div class="card-header">
						<h3>Login</h3>
					</div>
					<div class="card-body">
						<div class="form-group">
							 <label>Username</label>
							<input type="text" placeholder="Username" name="username" class="form-control">
						</div>
						<div class="form-group">
							 <label>Password</label>
							<input type="password" placeholder="Password" name="password" class="form-control">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Login" class="btn btn-info">
						<p class="text-danger">
							<?php echo $this->session->flashdata("msg"); ?>
						</p>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>