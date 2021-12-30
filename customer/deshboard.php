
<?php
include('../admin/config.php');
?>
<?php include ('header.php');?>

<div class="profile-section">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
			<div class="profile-sidebar">
				
			<?php include ('sidebar.php');?>
			</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					<?php
					$customlogin_id=$_SESSION['id'];

        			$ct_result = mysqli_query($con,"SELECT * FROM orders where status='Pending' and customer_id=$customlogin_id");
        			$pending=0;
					 while($sigle_product = mysqli_fetch_array($ct_result)) {
					
					$pending++; }

        			$ct_complete_result = mysqli_query($con,"SELECT * FROM orders where status='Complete' and customer_id=$customlogin_id");
        			$complete=0;
					 while($sigle_product = mysqli_fetch_array($ct_complete_result)) {
					
					$complete++; }

        			$ct_cancel_result = mysqli_query($con,"SELECT * FROM orders where status='Cancelled' and customer_id=$customlogin_id");
        			$cancel=0;
					 while($sigle_product = mysqli_fetch_array($ct_cancel_result)) {
					
					$cancel++; }

					?>

					<div class="col-md-4">
						<div class="order-countbox text-center bg-primary">
							<h3><?=$pending; ?></h3>
							<h4>Pending Order</h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="order-countbox text-center bg-success">
							<h3><?=$complete; ?></h3>
							<h4>Complete Order</h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="order-countbox text-center bg-danger">
							<h3><?=$cancel; ?></h3>
							<h4>Cancelled Order</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include ('footer.php');?>