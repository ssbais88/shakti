<!DOCTYPE html >
<html>
<head>
  <title></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css');?>">
  <script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js'); ?>"></script>



</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
<a href="#" class="navbar-brand"> The Steeping stone</a>
<button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#kkk">
<span class="navbar-toggler-icon"> </span></button>
<div id="kkk" class="collapse navbar-collapse">
   <ul class="navbar-nav">
    <li class="navbar-item">
      <a href="<?php echo site_url('home') ?>" class="nav-link">Home</a></li>
      <li class="navbar-item">
      <a href="<?php echo site_url('home/about') ?>" class="nav-link">About</a></li>
      <li class="navbar-item">
      <a href="<?php echo site_url('home/contact') ?>" class="nav-link">contact</a></li>
      <li class="navbar-item">
      <a href="<?php echo site_url('home/help') ?>" class="nav-link">help</a></li>
      <!-- <li class="navbar-item"> -->
      <!-- <a href="<?php echo site_url('home') ?>" class="nav-link">Home</a></li> -->
    </ul>
    </div>
</nav>
<div class="container">
<h2>this is a home page</h2>
<h2><?php echo $name1 ?></h2>
<h2><?php echo $name2 ?></h2>
<h2><?php echo $data['x'] ?></h2>
<h2></h2>
<h2></h2>

</div>

</body>

</html>