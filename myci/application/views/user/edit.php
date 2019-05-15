<div class="container mt-4" style="min-height: 500px;">
  <h2>User Profile Page</h2>
  <div class="row">
  	<div class="col-md-6 offset-md-3">
  		<?php
  		$data = $result->row_array();
  		?>
  		<table class="table table-dark table-hover table-bordered">
  			<tr>
  				<td>Full Name</td>
  				<td><input type="Text" class="form-control" value="<?php echo $data['full_name']; ?>" /></td>
  			</tr>
  			<tr>
  				<td>Username</td>
  				<td><input type="text" class="form-control" value="<?php echo $data['username']; ?>" /></td>
  			</tr>
  			<tr>
  				<td>Address</td>
  				<td><textarea class="form-control"><?php echo $data['address']; ?></textarea></td>
  			</tr>
  			<tr>
  				<td>Contact</td>
  				<td><input type="text" value="<?php echo $data['contact']; ?>" class="form-control"/></td>
  			</tr>
  			<tr>
  				<td>City</td>
  				<td> <select class="form-control" name="city">
              <option value="">Select</option>
              <option <?php if($data['city']=="Indore") echo "selected='selected'"; ?> value="Indore">Indore</option>
              <option  <?php if($data['city']=="Bhopal") echo "selected='selected'" ?> value="Bhopal">Bhopal</option>
              <option  <?php if($data['city']=="Mumbai") echo "selected='selected'" ?> value="Mumbai">Mumbai</option>
              <option  <?php if($data['city']=="Pune") echo "selected='selected'" ?> value="Pune">Pune</option>
            </select></td>
  			</tr>
  			<tr>
  				<td>Gender</td>
  				<td>Male <input <?php if($data['gender']=="male") echo "checked='checked'" ?> type="radio" name="gender" value="male" />Female <input <?php if($data['gender']=="female") echo "checked='checked'" ?> type="radio" name="gender" value="female" /></td>
  			</tr>
  			

  		</table>
  		
  	</div>
  </div>
</div>