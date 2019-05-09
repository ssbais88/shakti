<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
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
					<h2 class="text-center">Registration Page</h2>
				</div>

				<div class="card-body">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" class="form-control" name="" placeholder="Enter Full Name">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control" name="" placeholder="Enter Your Email">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="" placeholder="Enter Password">
					</div>
					<div class="form-group">
						<label>Confierm Password</label>
						<input type="password" class="form-control" name="" placeholder="Enter Password Again">
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" placeholder="Enter Your Address" name=""></textarea>
					</div>
					<div class="form-group">
						<label>Gender</label>
						<input type="radio" name="gender">Male
						<input type="radio" name="gender">Female
					</div>
					<div class="form-group">
						<label>City</label>
						<input type="text" class="form-control" name="" placeholder="Enter Your City Name">
					</div>
					<div class="form-group">
						<label>Contact</label>
						<input type="text" class="form-control" name="" placeholder="Enter 10 Digit Contact">
					</div>
					<div class="form-group">
						<label>Upload Pic</label>
						<input type="file" class="form-control" name="">
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Signup" class="btn btn-success float-right">
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>