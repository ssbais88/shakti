<div class="container mt-4" style="min-height: 500px;">
  <h2>Profile Page</h2>
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <?php
      $data = $result->row_array();
      ?>
      <table class="table table-dark table-hover table-bordered">
        <tr>
          <td>Full Name</td>
          <td><?php echo $data['full_name']; ?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><?php echo $data['email']; ?></td>
        </tr>
        <tr>
          <td>Gender</td>
          <td><?php echo $data['gender']; ?></td>
        </tr>
        <tr>
          <td>City</td>
          <td><?php echo $data['city']; ?></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><?php echo $data['address']; ?></td>
        </tr>
        <tr>
          <td>Contact</td>
          <td><?php echo $data['contact']; ?></td>
        </tr>
      </table>
      <a href="<?php echo site_url('user/edit') ?>" class="btn btn-info">Edit</a>
    </div>
  </div>
</div>