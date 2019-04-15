<?php
		include("db.php");
		include("header.php");
		$query =" SELECT * FROM product";
		$result = mysqli_query($con,$query);
?>
		<div class="col-md-9 mb-1">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bg-secondary py-4 pl-2 text-light">New Arrival's</h4>
				</div>
			</div>
			<div class="row">
				<?php
				while($data=mysqli_fetch_assoc($result))
				{ 
					$a = $data['pprice'];
					$b = $data['pdiscount'];

					$x = $a * $b /100;
					$y = $a - $x;
				?>
				<div class="col-md-4 mb-1">
					<div class="card">
						<div class="card-header">
							<span class="font-weight-bold"><?php echo $data['pname']; ?></span>
						</div>
						<div class="card-body"></div>
						<div class="card-footer">
							<button class="btn btn-success">Buy</button>
							<del>(<?php echo $data['pprice']; ?>)</del>
							<b><?php echo $y; ?>.00</b>
					</div>
					</div>
				</div>
			<?php }
			?>
			</div>
		</div>
	</div>
</div>
</div>
<?php
		include("footer.php");
?>