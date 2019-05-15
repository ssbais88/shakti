<div class="container" style="min-height:500px;">
 <h2>Edit Profile</h2>
 <div class="row">
 	<div class="col-md-6 offset-md-3">
 		<?php $data= $result->row_array(); ?>
 		<table class="table table-dark table-hover table-bordered">
 			<tr>
 			    <td>Full Name</td>
 			    <td><input type="text" class="form-control"value="<?php echo $data['full_name'] ?>">
 			    </td>
 			</td>
 			<tr>
 			    <td>User Name</td>
 			    <td><input type="text" class="form-control"value="<?php echo $data['username'] ?>">
 			    </td>
 			</td>
 			<tr>
 			    <td>Address</td>
 			    <td><textarea type="text" class="form-control"><?php echo $data['add']; ?></textarea>
 			    </td>
 			</td>
 			<tr>
 			    <td>Contact</td>
 			    <td><input type="text" class="form-control"value="<?php echo $data['contact'] ?>">
 			    </td>
 			</td>
 			<tr>
 			    <td>City</td>
 			    <td>
 			    	<select class="form-control" name="city">
 			    	    <option value="">select</option>
 			    	    <option <?php if($data['city']=="Indore") echo "selecte='selected'" ?> value="Indore">Indore</option>
 			    	    <option <?php if($data['city']=="Dewas") echo "selecte='selected'" ?> value="Dewas">Dewas</option>
 			    	    <option <?php if($data['city']=="Mumbai") echo "selecte='selected'" ?> value="Mumbai">Mumbai</option>
 			    	    <option <?php if($data['city']=="Bhopal") echo "selecte='selected'" ?> value="Bhopal">Bhopal</option>
 			        </select>
 			    </td>
 			</td>
 			<tr>
 			    <td>Gender</td>
 			    <td><input type="text" class="form-control"value="<?php echo $data['gender'] ?>">
 			    </td>
 		</table></div></div></div>