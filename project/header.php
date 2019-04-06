<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	<style type="text/css">
		.list-group-item{
			border-color: #fe4c50 !important;
			color: #fe4c50;
		}
		.list-group-item-action:hover{
			background-color: #fe4c50 !important;
			color: #FFF !important;
		}
		.my-box{
			margin:40px;
			height: 200px;
			background-size: 100% 100%;
		}
		.bg-mycolor{
			background-image: url("image/bg.jpg");
			background-size: 100%;
		}
	</style>
</head>
<body>
<nav class="navbar bg-mycolor navbar-expand-md navbar-dark sticky-top">
	<a class="navbar-brand" href="#">My Shopping</a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
		<span class="navbar-toggler-icon"></span>
	</button>


	<div id="myMenu" class="collapse navbar-collapse">
	<ul class="navbar-nav">
		<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
		<li class="nav-item"><a class="nav-link" href="#">About</a></li>
		<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
		<li class="nav-item"><a class="nav-link" href="#">Help</a></li>
		
	</ul>
	</div>
	<form class="form-inline">
		<input type="text" class="form-control" placeholder="Search">
		<button type="submit" class="btn btn-dark"><i class="fa fa-search" aria-hidden="true"></i></button>
	</form>
	<ul class="navbar-nav">
		<li class="nav-item">
			<a href="#" class="nav-link">My Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
		</li>
		<li class="nav-item">
			<a href="login.php" class="nav-link">Login <i class="fa fa-user" aria-hidden="true"></i></a>
		</li>
		<li class="nav-item">
			<a href="signup.php" class="nav-link">Signup <i class="fa fa-user" aria-hidden="true"></i></a>
		</li> 
	</ul>
 


</nav>
<div class="jumbotron mb-0" style="background-color: #225544; border-radius: 0; background-image: url('image/bg.jpg'); background-size: 100% 100%">
	<h1 class="text-light">The Stepping Stone</h1>
	<p class="text-light">Web Development Training Insititute in Indore</p>
</div>
<!-- <div class="container-fluid" style="background-color: #fe4c50;">
	<div class="container">
		<h2 class="text-light pt-4">Our Project</h2>
		<p class="pb-4 text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div> -->
<div class="container mt-4">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				<a class="list-group-item list-group-item-action" href="#">Mobile</a>
				<a class="list-group-item list-group-item-action" href="#">Home Applicance</a>
				<a class="list-group-item list-group-item-action" href="#">Electronics</a>
				<a class="list-group-item list-group-item-action" href="#">Fashion</a>
			</div>
		</div>