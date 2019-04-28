<?php
include("header.php");
?>
<div class="col-md-9">
	<div class="row">
		<div class="col-md-12 border bg-dark">
		<h3>Login</h3>
	    </div>
	</div>
	    <div class="row my-2">
	    	<div class="col-md-8 offset-md-2">
	    		<div class="card">
	    			<div class="card-header">
	    				Signin
	    			</div>
	    			<div class="card-body">
	    				<div class="form-body">
	    				<label>Email</label>
	    				<input type="text" name="email" placeholder="email" class="form-control">
	    			    </div>
	    			    <div class="form-body">
	    				<label>Password</label>
	    				<input type="password" name="pass" class="form-control">
	    			    </div>
	    			</div>
	    			<div class="card-footer">
	    				<input type="submit" value="login" class="btn btn-success">
	    			</div>
	    		</div>
	    	</div>
	    </div>
	</div>
	<?php
	include("footer.php");
	?>
