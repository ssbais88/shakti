<!DOCTYPE html>
<html>
<head>
	<title>Signin Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css');?>">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js'); ?>"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-dark">
		<a href="#" class="navbar-brand">MagicBricks</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#me">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="me" class="collapse navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item"><a href="<?php echo site_url('home'); ?>" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="<?php echo site_url('home/about'); ?>" class="nav-link">About</a></li>
				<li class="nav-item"><a href="<?php echo site_url('home/contact'); ?>" class="nav-link">Contact</a></li>
				<li class="nav-item"><a href="<?php echo site_url('home/help'); ?>" class="nav-link">Help</a></li>
			</ul>
		</div>
		<ul class="navbar-nav">
			<li class="nav-item"><a href="<?php echo site_url('home/signup'); ?>" class="nav-link">Signup</a></li>
			<li class="nav-item"><a href="<?php echo site_url('home/signin'); ?>" class="nav-link">Signin</a></li>
		</ul>
	</nav>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 offset-3">
			<div class="card">
				<div class="card-header">
					<h3 class="text-center">Login Here</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
				<label>Email Id</label>
				<input type="text" placeholder="Enter Registered Email" class="form-control">
					</div>
					<div class="form-group">
				<label>Password</label>
				<input type="password" placeholder="Enter Password" class="form-control">
			</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Signin" class="btn btn-primary">
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>