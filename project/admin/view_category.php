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
						<td><a href="#" class="btn btn-info">Edit</a></td>
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

