<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url("js/jquery.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/bootstrap.bundle.js"); ?>"></script>
	<style type="text/css">
		body{
			background-color: #acdf23;
		}
	</style>
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
<h1>This is Contact Page</h1>
</body>
</html>