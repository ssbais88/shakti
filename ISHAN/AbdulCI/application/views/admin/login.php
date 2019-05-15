<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 offset-3">
			<form action="<?php echo site_url("admin/panel"); ?>" method="post">
				<div class="card my-4">
					<div class="card-header">
						<h2 class="text-center">Admmin Login Page</h2>
					</div>
					<p class="text-danger">
						<?php
							echo $this->session->flashdata("msg");
						?>
					</p>
					<div class="card-body">
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" placeholder="Please Enter Email" name="username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" placeholder="Please Enter Password" name="password">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" class="btn btn-success " name="">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>