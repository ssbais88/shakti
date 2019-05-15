<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css');?>">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js'); ?>"></script>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<a class="navbar-brand" href="#">The Store</a>
	</nav>

	<?php
		$this->load->view($pagename);
		// print_r($pagedata);
	?>
	
	<div class="container-fluid bg-dark">
		<div class="row">
			<p class="text-center text-light p-4">Shop for You, Indore</p>
		</div>
	</div>
</body>
</html>