<?php

include("db.php");
include("dashboard.php");

 $query = "select * from addproduct";
 $result = mysqli_query($con,$query);

?>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-dark table-bordered table-hover">
				<tr>
					<th>product id</th>
					<th>product name</th>
					<th>product price</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
				while ($data = mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td><?php echo $data['id']?></td>
					<td><?php echo $data['p_name']?></td>
					<td><?php echo $data['p_price']?></td>
					<td><a href="#" class="btn btn-info">Edit</a></td>
				<td><a href="deleteproduct.php?product=<?php echo $data['id']?>" class="btn btn-danger">Delete</a></td>
				</tr>

                <?php
                }
             
                ?>
			</table>
		</div>
	</div>
</div>



