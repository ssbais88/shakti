<div class="container mt-4" style="min-height: 500px;">
  <h2>Signup Page</h2>
  <div class="row">
  	<div class="col-md-6 offset-md-3">
      <form action="" method="post">
        <?php
        // echo validation_errors();
        ?>
      <div class="card">
        <div class="card-header">
          <h3>Signup</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" class="form-control" name="full_name">
            <div class="text-danger">
            <?php
            echo form_error("full_name");
            ?>
            </div>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control">
            <div class="text-danger">
            <?php
            echo form_error("username");
            ?>
            </div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="pass" class="form-control">
            <div class="text-danger">
            <?php
            echo form_error("pass");
            ?>
            </div>
          </div>
          <div class="form-group">
            <label>Re-Password</label>
            <input type="password" name="re_pass" class="form-control">
            <div class="text-danger">
            <?php
            echo form_error("re_pass");
            ?>
            </div>
          </div>
          <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" name="add"></textarea>
            <div class="text-danger">
            <?php
            echo form_error("add");
            ?>
            </div>
          </div>
          <div class="form-group">
            <label>City</label>
            <select class="form-control" name="city">
              <option>Select</option>
              <option>Indore</option>
              <option>Bhopal</option>
              <option>Mumbai</option>
              <option>Pune</option>
            </select>
            <div class="text-danger">
            <?php
            echo form_error("city");
            ?>
            </div>
          </div>
          <div class="form-group">
            <label>Gender</label>
            Male <input type="radio" value="male" name="gender">
            Female <input type="radio" value="female" name="gender">
            <div class="text-danger">
            <?php
            echo form_error("gender");
            ?>
            </div>
          </div>
          <div class="form-group">
            <label>Contact</label>
            <input type="text" class="form-control" name="contact">
            <div class="text-danger">
            <?php
            echo form_error("contact");
            ?>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <input type="submit" value="Signup" class="btn btn-primary">
        </div>
      </div>
      </form>
    </div>
  </div>
</div>