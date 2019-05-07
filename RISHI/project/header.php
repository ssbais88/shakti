<?php
$query="SELECT * FROM category";
$result=mysqli_query($con,$query);




$que_auto="SELECT * FROM addproduct";
$res_auto=mysqli_query($con ,$que_auto);

$auto="";

while($data_auto=mysqli_fetch_assoc($res_auto))
{
	$auto .= '"'.$data_auto['productname'].'",';
}

$search_str = trim($auto,",");
?>
<html>
<head>
	<title>project</title>
	<meta name="viewport" content="width=device-width intial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	<script type="text/javascript">
		$(function(){
			var availableTags = [<?php echo $search_str ?>];
			$("#tags").autocomplete({
				source : availableTags
			});
		});
	</script>
</head>
<body>
	<nav class="navbar navbar-dark bg-success navbar-expand-sm sticky-top">
		<a href="#" class="navbar-brand">
			 Treasure BaZZar</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="mymenu" class="collapse navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="index.php" class="nav-link">HOME</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">ABOUT</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">My Cart<i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge badge-pill badge-dark"></span></a>
				</li>
			</ul>
		</div>
		
			<form class="form-inline" action="" method="get">
				<input type="text" id="tags" name="q" class="form-control" placeholder="Search Here">
				<button class="btn btn-dark" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
				
				<ul class="navbar-nav">
					<?php
						if(isset($_SESSION['is_user_logged_in']))
						{ ?>

					<li class="nav-item">
						<a href="my_account.php" class="nav-link">
							<i class="fa fa-lock"></i>My Acoount
						</a>
					</li>
					<li class="nav-item">
						<a href="logout.php" class="nav-link">
							<i class="fa fa-user-plus" aria-hidden="true"></i> Signout
						</a>
					</li>
					<?php	}
						else
						{ ?>

					<li class="nav-item">
						<a href="login.php" class="nav-link">
							<i class="fa fa-lock"></i> Login
						</a>
					</li>
					<li class="nav-item">
						<a href="signup.php" class="nav-link">
							<i class="fa fa-user-plus" aria-hidden="true"></i> Signup
						</a>
					</li>
					<?php	}
					?>
				</ul>
		</div>
	</nav>
	<div class="jumbotron" style="background-image: url(441.jpeg); background-size: 100% 100%">
		<h2 style="color: #FFF;">TREASURE BAZZAR</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
			<?php
			while($data=mysqli_fetch_assoc($result))
			{?>
				<div class="list-group">
					<a href="#" class="list-group-item list-group-item-action"><?php echo $data['category'] ?></a>
				</div>
				
		    <?php
			} 
		    ?>
			</div>