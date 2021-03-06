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
            <input type="text" class="form-control" name="full_name" value="<?php echo set_value('full_name') ?>">
            <div class="text-danger">
            <?php
            echo form_error("full_name");
            ?>
            </div>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" value="<?php echo set_value('username');?>" name="username" class="form-control">
            <div class="text-danger">
            <?php
            echo form_error("username");
            ?>
            </div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" value="<?php echo set_value('pass');?>" name="pass" class="form-control">
            <div class="text-danger">
            <?php
            echo form_error("pass");
            ?>
            </div>
          </div>
          <div class="form-group">
            <label>Re-Password</label>
            <input type="password" value="<?php echo set_value('re_pass');?>" name="re_pass" class="form-control">
            <div class="text-danger">
            <?php
            echo form_error("re_pass");
            ?>
            </div>
          </div>
          <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" name="add"><?php echo set_value('add');?></textarea>
            <div class="text-danger">
            <?php
            echo form_error("add");
            ?>
            </div>
          </div>
          <div class="form-group">
            <label>City</label>
            <select class="form-control" name="city">
              <option value="">Select</option>
              <option <?php echo set_select('city', 'Indore'); ?> value="Indore">Indore</option>
              <option <?php echo set_select('city', 'Bhopal'); ?> value="Bhopal">Bhopal</option>
              <option <?php echo set_select('city', 'Mumbai'); ?> value="Mumbai">Mumbai</option>
              <option <?php echo set_select('city', 'Pune'); ?> value="Pune">Pune</option>
            </select>
            <div class="text-danger">
            <?php
            echo form_error("city");
            ?>
            </div>
          </div>
          <div class="form-group">
            <label>Gender</label>
            Male <input type="radio" <?php echo set_radio('gender', 'male'); ?> value="male" name="gender">
            Female <input type="radio" <?php echo set_radio('gender', 'female'); ?> value="female" name="gender">
            <div class="text-danger">
            <?php
            echo form_error("gender");
            ?>
            </div>
          </div>
          <div class="form-group">
            <label>Contact</label>
            <input value="<?php echo set_value('contact');?>" type="text" class="form-control" name="contact">
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