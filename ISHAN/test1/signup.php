<?php
include("header.php");
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 offset-2">
			<form action="save.php" method="post">
				<div class="card">
					<div class="card-header">
						<h3 class="text-center text-danger">Student Information</h3>
					</div>

					<div class="card-body">
						<div class="form-group">
							<label>Student Name</label>
							<input type="text" name="sname" placeholder="Enter Name" class="form-control">
						</div>
						<div class="form-group">
							<label>Roll No.</label>
							<input type="text" name="rollnum" placeholder="Enter Name" class="form-control">
						</div>
						<div class="form-group">
							<label>Fees</label>
							<input type="text" name="fees" placeholder="Enter Fees" class="form-control">
						</div>
						<div class="form-group">
							<label>Age</label>
							<input type="text" name="age" placeholder="Enter Age" class="form-control">
						</div>
						<div class="form-group">
							<label>Class</label>
							<select class="form-control" name="class">
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
							</select>
						</div>
						<div class="form-group">
							<label>Contact Detail</label>
							<input type="text" name="contact" placeholder="Enter Contact" class="form-control">
						</div>
					</div>

					<div class="card-footer">
						<input type="submit" value="Submit" class="btn btn-success">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>