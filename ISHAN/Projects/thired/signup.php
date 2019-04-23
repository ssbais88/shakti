<?php
include("db.php");
include("header.php");
?>
<div class="row">
	<div class="col-md-8 offset-2">
		<form action="save.php" method="post" enctype="multipart/form-data">
			<div class="card">
				<div class="card-header">
					<h1 class="text-center">Student Registration</h1>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="fname" class="form-control" placeholder="Enter Full Name">
					</div><div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control" placeholder="Enter Email">
					</div><div class="form-group">
						<label>Password</label>
						<input type="password" name="fname" class="form-control" placeholder="Enter Password">
					</div><div class="form-group">
						<label>Class</label>
						<select  class="form-control" name="class">
							<option>Select</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
					</div>
					<div class="form-group">
						<label>Sectio</label>
						<input type="radio" name="section" value="A">A
						<input type="radio" name="section" value="B">B
						<input type="radio" name="section" value="C">C
						<input type="radio" name="section" value="D">D
					</div>
					<div class="form-group">
						<label>Gender</label>
						<input type="radio" name="gender" value="male">Male
						<input type="radio" name="section" value="female">Female
					</div>
					<div class="form-group">
						<label>Contact</label>
						<input type="text" name="contact" class="form-control" placeholder="Enter Contact Number">
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" placeholder="Enter Address"></textarea>
					</div>
					<div class="form-group">
						<label>Upload Your Image</label>
						<input type="file" name="image" class="form-control">
						<p class="text-center text-danger">
							<?php
						if(isset($_SESSION['msg']))
						{
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
							?>

						</p>
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="SignUp" class="btn btn-succsess">
				</div>
			</div>
		</form>
	</div>
</div>