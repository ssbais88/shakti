<?php
include("header.php");
$con = mysqli_connect("localhost","root","","onlineshop");
$query = "select * from addproduct";

$result = mysqli_query($con,$query);

?>
     <div class="col-md-9">
     	<div class="row">
     		<div class="col-md-12">
     	<h3 class="bg-secondary px-4 py-2 mt-2">Latest product</h3>
         </div>
      </div>
   <div class="row">
      <?php while($data = mysqli_fetch_assoc($result))
         {
          $a = $data['p_price'];
          $b = $data['p_discount'];

          $x = $a * $b/100;
          $y = $a-$x;
       ?>
   	<div class="col-md-4">
   		<div class="card mb-2">
   			<div class="card-header">
   				<span class="font-weight-bold"><?php echo $data['p_name']?></span>
   			</div>
   			<div class="card-body">
   				<img src="admin/upload/<?php echo $data['image_name']; ?>" style="height:150px !important; width: 100%;" />
   			</div>
   			<div class="card-footer">
   				<a href="#" class="btn btn-success">Buy</a>
              <br />
              <del>(<?php echo $data['p_price'];?>)</del>
              <b><?php echo $y; ?>.00</b>
   			</div>
   		</div>
   </div> 
   <?php
   }
   ?></div>
 </div>
   </div>
   <?php
    include("footer.php");
   ?>

</body>
</html>