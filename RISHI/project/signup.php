<?php
include("header.php")
?>

		<div class="col-md-9 ">
				<div class="card">
					<div class="card-header">
						<div>
							<h2>sign up</h2>
						</div>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label for="full">Full NAME</label>
						<div class="input-group">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i>
								</span>
							</div>
							<input type="text" id="full" class="form-control" placeholder="fullname">
							</div>

				    </div>
				    <div class="form-group">
				    	<label for="user">User Name</label>
				    	<div></div>
				    </div>
				<div class="form-group">
							<label for="full_name">MOBILE NO.</label>
						<div class="input-group">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i>

								</span>
							</div>
							<input type="text" id="full_name" class="form-control" placeholder="mobile no.">
							</div>
							
				</div>
				<div class="form-group">
					<label>PASSWORD</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>		
						</div>
						<input type="password" placeholder="password">
					</div>
				</div>
				<div class="form-group">
					<label>gender</label>
					<div>
						male<input type="radio" name="male">
						female<input type="radio" name="male">
					</div>
					
				</div>
				<div class="form-group">
					<label>address</label>
					<textarea class="form-control" placeholder="address"></textarea>
					
				</div>
				<div class="form-group">
					<label>city</label>
					<select class="form-control">
						<option>select</option>
						<option>indore</option>
				        <option>ujjain</option>
				        <option>bhopal</option>
					</select>
				</div>
					<div class="card-footer">
						<button class="btn btn-info">signup</button>
						
					</div>
					


					
				</div>
				
			</div>

</body>
</html>