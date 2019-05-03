   
   <?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}
include('header.php');	
$query ="SELECT * FROM category";
$result=mysqli_query($con, $query);



?>
<div class="container">
	<h3>View All Category</h3>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<table class="table table-bordered table-dark table-hover">
				<tr>
					<th>S.No.</th>
					<th>Category Name</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
				while($data = mysqli_fetch_assoc($result))
				{ ?>
					<tr>
						<td><?php echo $data['id']; ?></td>
						<td><?php echo $data['category_name'];?></td>
						<td><a href="edit_cate.php?cate=<?php echo $data['id'];?>" class="btn btn-info">Edit</a></td>
<<<<<<< HEAD
=======
						<td><?php echo $data['category'];?></td>
						<td><a href="#" class="btn btn-info">Edit</a></td>
>>>>>>> e7c802d7385a9c2f0ab324fa2cb8ffb828336b14	
=======

>>>>>>> 768d4a0aa0fdb6e3b0e051c53d8e4ed7c8614604
						<td><a href="delete_cate.php?cate=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td>
					</tr>



				<?php
				}
				?>





			</table>
		</div>
	</div>
</div>

<?php
include('footer.php');
?>

