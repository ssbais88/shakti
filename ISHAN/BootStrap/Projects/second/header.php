<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

	<style type="text/css">
		.a1:hover{
			background-color:#33FF99;

		}
		.a2{
				height: 280px;
				width: 300px;
				background-image:url("img/2.jpg");
				background-size: 100% 100%;
		}
		.a3{
				height: 280px;
				width: 300px;
				background-image:url("img/3.jpg");
				background-size: 100% 100%;
		}
		.a4{
				height: 280px;
				width: 300px;
				background-image:url("img/4.jpeg");
				background-size: 100% 100%;
		}
		.a5{
				height: 280px;
				width: 300px;
				background-image:url("img/5.jpg");
				background-size: 100% 100%;
		}
		.a6{
				height: 280px;
				width: 300px;
				background-image:url("img/6.png");
				background-size: 100% 100%;
		}
		.a7{
				height: 280px;
				width: 300px;
				background-image:url("img/7.jpg");
				background-size: 100% 100%;
		}
		.lg{
			color:#33FF99;
		}
		.div1{
			float: left;
		}
		.div2{
			float: left;
		}
	</style>
</head>
<body>
<div class="container-fluid bg-dark">
	<div class="row" style="background-color:#DAF7A6">
		<div class="col-md-5">
			<p class="text-danger m-1 p-2">World's fast growing site</p>
		</div>
		<div class="col-md-7">
			<ul class="nav justify-content-end">
		<button class=" btn nav-item"><a href="login.php" class="nav-link">Login <i class="fa fa-lock" aria-hidden="true"></i></a></button>
		<button class="btn nav-item"><a href="signup.php" class="nav-link">Signup <i class="fa fa-sign-in" aria-hidden="true"></i></a></button>
		<button class="btn nav-item" data-toggle="modal" data-target="#cart"><a href="#" class="nav-link">Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge badge-warning badge-pill">2</span></a></button>
	</ul>
		</div>
	</div>
</div>
	<nav class="navbar sticky-top navbar-dark navbar-expand-sm" style="background-color:#394931;">
		<a href="#" class="navbar-brand text-danger h1">eBay</a>
		<button class="navbar-toggler btn-dark
		" data-toggle="collapse" data-target="#my">
			<span class="navbar-toggler-icon"></span>
		</button>
		<form class="form-inline">
			<input type="text" name="" class="form-control" placeholder="Search Item's">
			<button class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i></button>
		</form>
		<div id="my" class="collapse navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="index.php" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">About</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Contact</a>
				</li>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">more</a>
					<div class="dropdown-menu" style="background-color:#33FF99;">
						<a href="#" class="dropdown-item">Notification's</a>
						<a href="#" class="dropdown-item">Sell here</a>
						<a href="#" class="dropdown-item">24X7 Customer Support</a>
						<a href="#" class="dropdown-item">Download App</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	</div>
</div>
<div class="container-fluid mt-1">
	<div class="row">
		<div class="col-md-3 mb-1">
			<div class="list-group">
				<a href="#" class="list-group-item list-group-item-action a1">Men's</a>
				<a href="#" class="list-group-item list-group-item-action a1">Women's</a>
				<a href="#" class="list-group-item list-group-item-action a1">Mobile & Tablet</a>
				<a href="#" class="list-group-item list-group-item-action a1">Home Applainces</a>
				<a href="#" class="list-group-item list-group-item-action a1">Kitchen</a>
			</div>
		</div>
		
					<!-- Login and Signup  popup or modal id Element  -->
<div id="cart" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"><h2>My Cart(0)</h2>
			</div>
			<div class="modal-body">
			<h3 class="text-center text-primary">Your Cart is Empty</h3>
			<img src="img/8.png" class="img-thumbnail"> 
			</div>
			<div class="modal-footer">
				<input class="btn btn-warning" data-dismiss="modal" type="reset" name="" value="Shop Now">
			</div>
		</div>
	</div>
</div>
</body>
</html>