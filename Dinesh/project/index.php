<?Php
include("header.php");
$query = "SELECT * FROM category";
$result = mysqli_query($con, $query);
?>

  <div class="container mt-4">
  	<DIV class="row">
  		<div class="col-md-3">
  			<div class="list-group">
  				<?php
        while($data=mysqli_fetch_assoc($result))
        { ?>
          <a class="list-group-item list-group-item-action" href="#"><?php echo $data['category_name'];?></a>

        <?php
        }
        ?>
  			</div>
  		</div>
  		<div class="col-md-9">
  			<DIV class="row">
  				<div class="col-md-5">
  					<div class="card">
  						<!-- <div class="card-header">
  							
  						</div> -->
  						<div class="card-body">
  							<img src="image/4.jpeg">
  						</div>
  						<div class="card-footer">
  								<a href="#" class="bg-dark text-light" >Buy</a>
  						</div>
  					</div>

  				</div>
  				<div class="col-md-5">
  					<div class="card">
  						<!-- <div class="card-header">
  							
  						</div> -->
  						<div class="card-body">
  							<img src="image/2.jpeg">
  						</div>
  						<div class="card-footer">
  							<a href="#"class="bg-dark text-light">Buy</a>
  						</div>
  					</div>

  				</div>
  			 	
  			</DIV>  
  </div>  
</div>
  </DIV>
</div>
  <?php 
  include("footer.php");
   ?>

</body>
</html>