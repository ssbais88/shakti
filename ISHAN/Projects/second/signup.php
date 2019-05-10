<?php
include("db.php");
include("header.php");
?>
<div class="col-md-9 mb-1">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bg-secondary py-4 pl-2 text-light">Registration Page</h4>
				</div>
			</div>
<div class="row">
	<div class="col-sm-8 offset-2">
		<div class="card">
			<div class="card-body">
				<form id="myForm" action="save.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Full Name</label>
						<input id="name" type="text" name="full_name" class="form-control" placeholder="Enter your Full name">
					</div>
					<span class="error" id="nameerror"></span>
					<div class="form-group">
						<label>Email Id</label>
						<input Onkeyup="checkValidEmail()" id="email" type="text" name="username" class="form-control" placeholder="Enter your Email-id">
					</div>
					<span class="error" id="emailerror"></span>

					<div class="form-group">
						<label>Password</label>
						<input Onkeyup="matchpassword()" id="password" type="password" name="pass" class="form-control" placeholder="Enter your Password">
					</div>
					<span class="error" id="passworderror"></span>

					<div class="form-group">
						<label>Re-Password</label>
						<input Onkeyup="matchpassword()" id="confirmPassword" type="password" class="form-control" placeholder="Enter Password Again">
					</div>
					<span class="error" id="cpassworderror"></span>

					<div class="form-group">
						<label>Gender </label>
						<input class="gender" type="radio" name="gender" value="male">Male
						<input class="gender" type="radio" name="gender" value="female">Female
					</div>
					<span class="error" id="gendererror"></span>

					<div class="form-group">
						<label>Address </label>
						<textarea id="address" class="form-control" name="add" placeholder="Enter Address Here..."></textarea>
					</div>
					<span class="error" id="addresserror"></span>

					<div class="form-group">
						<label>Contact</label>
						<input id="contact" type="text" name="contact" class="form-control" placeholder="Enter Mobile or Phone">
					</div>
					<span class="error" id="contacterror"></span>

					<div class="form-group">
						<label>Image File</label>
						<input id="img" type="file" name="simage" class="form-control">
						<?php
							if (isset($_SESSION['msg'])) {
								echo $_SESSION['msg'];
								unset($_SESSION['msg']);
							}
						?>
					</div>
					<div class="form-group">
						<label>City</label>
						<select id="city" class="form-control" name="city">
							<option value="">SELECT</option>
							<option value="INDORE" >INDORE</option>
							<option value="BHOPAL" >BHOPAL</option>
							<option value="JABALPUR" >JABALPUR</option>
							<option value="KATNI" >KATNI</option>
							<option value="UJJAIN" >UJJAIN</option>
							<option value="DELHI" >DELHI</option>
						</select>
					</div>
					<span class="error" id="cityerror"></span>

			<div class="card-footer">
				<input id="savebtn" type="submit" class="btn btn-success" value="Signup">
			</div>
			</form>
		</div>
	</div>
</div>
</div>
</div>
<?php
		include("footer.php");
?>
<style type="text/css">
	.error {
		color: red;
		font-size:14px;
	}
</style>
<script type="text/javascript">
	
	var matchpassword = true;
	function matchpassword(){
		var password = $("#password").val();
		var confirmPassword = $("#confirmPassword").val();
		if(password !=" " && confirmPassword !=" ") {
			if(password != confirmPassword){
				$("#cpassworderror").html(" Please Check Confirm Password");
					matchpassword = false;

				// $("#savebtn").attr("disabled", true);
			}
			else{
				$("#cpassworderror").html("");
				// $("#savebtn").attr("disabled", false);
					matchpassword = true;
			}
		}
	}
	emailCheck = true;
	function checkValidEmail(){
		filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var email = $("#email").val();

		if (filter.test(email)) {
		  // Yay! valid
		 $("#emailerror").html('');
		  console.log('valid');
		  emailCheck = true;
		}
		else{
		$("#emailerror").html('Please Enter Valid Email.');
		  console.log('invalid');

			emailCheck = false;
		}
	}

		

	$('#savebtn').click(() =>{
		
		$("#nameerror").html('');
		$("#emailerror").html('');
		$("#passworderror").html('');
		$("#cpassworderror").html('');
		$("#addresserror").html('');
		$("#contacterror").html('');
		$("#cityerror").html('');
    	var name = $("#name").val();
		var email = $("#email").val();
		var password = $("#password").val();
		var confirmPassword = $("#confirmPassword").val();
		var address = $("#address").val();
		var contact = $("#contact").val();
		var gender = $('input[type=radio][name=gender]:checked').length;
		var city = $("#city").val();

		if(name ===''|| email ===''|| password ===''||confirmPassword ===''|| address ===''|| contact ===''|| gender === 0 || city ==='')
		{
			if(name === '') {
				$("#nameerror").html('Please Enter Your Name.');
			} else {
				$("#nameerror").html('');
			}

			if(email === '') {
				$("#emailerror").html('Please Enter Email.');
			} else {
				$("#emailerror").html('');
			}
			if(password === '') {
				$("#passworderror").html('Please Enter Your password.');
			} else {
				$("#passworderror").html('');
			}
			if(confirmPassword === '') {
				$("#cpassworderror").html('Please Enter Confirm Password.');
			} else {
				$("#cpassworderror").html('');
			}
			if(address === '') {
				$("#addresserror").html('Please Enter Your address.');
			} else {
				$("#addresserror").html('');
			}
			if(contact === '') {
				$("#contacterror").html('Please Enter Your Contact.');
			} else {
				$("#contacterror").html('');
			}
			if(city === '') {
				$("#cityerror").html('Please Enter Your City.');
			} else {
				$("#cityerror").html('');
			}
			return false;
		} else if(matchpassword == false || emailCheck == false) {
			if(matchpassword == false) {
				$("#cpassworderror").html(" Please Check Confirm Password");
				return false;
			} else {
				$("#cpassworderror").html('');
			}
			if(emailCheck == false) {
				$("#emailerror").html('Please Enter Valid Email.');
				return false;
			} else {
				$("#emailerror").html('');
			}
		}
	
	});
</script>
