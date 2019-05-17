<div class="container my-4" style="min-height: 600px;">
	<h2>View Users</h2>
	<div class="row">
		<div class="col-md-10 offset-1 my-4">
			<table class="table table-dark table-hover table-bordered">
				<tr>
					<th>ID No.</th>
					<th>Full Name</th>
					<th>Username</th>
					<th>Detail</th>
				</tr>
				<?php
				foreach ($result->result_array() as $data)
				{?>
				<tr>
					<td><?php echo $data['id']; ?></td>
					<td><?php echo $data['full_name']; ?></td>
					<td><?php echo $data['email']; ?></td>
					<td><a href="<?php echo site_url('admin_dashboard/user_detail/'.$data['id']); ?>" class="btn btn-primary btn-sm">More Detail</a></td>
				</tr>
				<?php
				}
				?>
			</table>
		</div>
	</div>
</div>