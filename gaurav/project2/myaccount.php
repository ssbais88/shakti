<?php
session_start();
include("header.php");
$con = mysqli_connect("localhost","root","","online_shop2");
$query = "SELECT * FROM signup WHERE id = ".['id'];
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);
print_r($_POST);
die();

?>
<div class="col-md-9">
	<div class="row">
		<div class="col-md-12">
			<h2>Myprofile</h2>
		</div>
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<table class="table table-dark table-bordered my-2">
					<tr>
						<td>Full name</td>
						<td><?php echo $data['fullname']?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $data['email']?></td>
					</tr>
					<tr>
						<td>image</td>
						<td><img src="upload/<?php echo $data['imagename']?>"></td>
					</tr>
					<tr>
						<td>address</td>
						<td><?php echo $data['address']?></td>
					</tr>
					<tr>
						<td>gender</td>
						<td><?php echo $data['gender']?></td>
					</tr>
					<tr>
						<td>city</td>
						<td><?php echo $data['city']?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	
</div>
<?php
include("footer.php")?>