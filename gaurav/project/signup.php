<?php
include("header.php");
?>
     <div class="col-md-9">
     	<div class="row my-2">
     		<div class="col-md-12">
           <div class="card">
        
        <div class="card-header">
          <h1>Sign up</h1>
        </div>
        <div class="card-body">
          
          <div class="form-group">
            <label for="full-name">Full name</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="full-name">
            </div>



          <div class="form-group">
            <label for="User-name">User Name</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user" aria-hidden="true">
                </i></span>
              </div>
              <input type="text" class="form-control" placeholder="User-Name">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
              </div>
            </div>
          </div>



          <div class="form-group">
            <label>Password</label>
            <div class="input-group">
              
                <input type="password" class="form-control" placeholder="password">
                <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label>Gender</label>
            <br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender">
              <label class="form-check-label">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender">
              <label class="form-check-label">Female</label>
            </div>
          </div>
                    
                    <div class="form-group">
                      <label for="add">Address</label>
                      <textarea class="form-control" placeholder="Address" id="add"></textarea>
                    </div>
          
          <div class="form-group">
            <label>City</label>
            <select class="form-control">
              <option>Select</option>
              <option>Indore</option>
              <option>Mumbai</option>
              <option>Pune</option>
            </select>
          </div>
   

          </div>
          <div class="card-footer">
          <input type="submit" class="btn btn-primary" value="Signup">
           </div>
        </div>
      </div>
   	</div>
   </div> 

   </div>
   <?php
    include("footer.php");
   ?>

</body>
</html>