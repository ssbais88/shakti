<?php 
include("db.php");
include("header.php");
$id = $_SESSION['id'];
$query ="SELECT * FROM project WHERE id= $id";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);
// print_r($data);


?>
<div class="col-md-9">
<div class="row">
	<div class="col-md-12">
	   <h3 class="bg-secondary text-light ">Profile Update</h3>
    </div>
    <div class="col-md-10 offset-md-1">
    	<div class="card">
    		<div class="card-header">
    			<h3>Update</h3></div>
    		
    		<div class="card-body">
    			<form action="update_profile.php" method="POST" enctype="multipart/form-data">
    				<div class="form-group">
    					<lable>Full Name</lable>
    					<input type="text" name="full_name" value="<?php echo $data['full_name']; ?>" placeholder="full name"  class="form-control"></div>
    					<div class="form-group">
    					<lable>Profile Pic</lable>
    					<input type="file" name="image" value="" placeholder="profile pick " class="form-control"></div>

                        <div class="form-group">
    					<label>Curent Pic</lable>
    					<input type="text" name="current_pic" value="" placeholder="full name"  class="form-control"></div>

                        <div class="form-group">
    					<lable>Username/gmail</label>
    					<input type="text" name="gmail_name" value="<?php echo $data['user_name']; ?>" placeholder="full name"  class="form-control"></div>

                        <div class="form-group">
    					<lable>gender</lable>
    					<input <?php   if($data['gender']=="male") echo "checked='checked'" ; ?>type="radio" name="gender" value="male"  >male
                        <input <?php  if($data['gender']=="female") echo "checked='checked'" ; ?> type="radio" name="gender"  value="female"  >female
                         </div>

                          <div class="form-group">
    					<lable>Address</lable>
    					<input type="text" name="address" value="<?php  echo $data['address']; ?>" placeholder="full name"  class="form-control"></div>

                        <div class="form-group">
    					<lable>Contact</lable>
    					<input type="text" name="contact" value="<?php echo $data['contact']; ?>" placeholder="full name"  class="form-control"></div>
    					<div class="form-group"> 
    						<label>City</label>
    						<select class="form-control" name="city">
    							<option>Indore</option>
    							<option>Bhopal</option>
    							<option>Mumbai</option>
    							<option>Pune</option>
    						</select>
    					</div>
    					<div class="card-footer">
    						<input type="submit" class="btn-success"></div>




    				</form></div></div></div>
</div><hr>--