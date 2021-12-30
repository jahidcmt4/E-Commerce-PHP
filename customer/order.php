
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
					<div class="col-md-12">
					
					</div>	
					
					
					<div class="col-md-12">
						<table class="table">
					
					<tr>
						<th>Delivary Address</th>
						<th>Order Date</th>
						<th>Payment Method</th>
						<th>Status</th>
					</tr>
					<?php
					$customlogin_id=$_SESSION['id'];
					$allorders = mysqli_query($con,"SELECT * FROM orders where customer_id=$customlogin_id");
					 while($sigle_product = mysqli_fetch_array($allorders)) {
					?>
					<tr>
						<td><?=$sigle_product['address']; ?></td>
						<td><?=$sigle_product['order_date']; ?></td>
						<td><?=$sigle_product['pmethod']; ?></td>
						<td>
						<?php if($sigle_product['status']=="Pending"){ ?>
							<button class="btn btn-info btn-sm">Pending</button>
							<a href="cancelorder.php?delete=<?=$sigle_product['oid']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to Cancelled this order?')">Cancel Order</a>
						<?php }if($sigle_product['status']=="Complete"){ ?>	
							<button class="btn btn-success btn-sm">Complete</button>
						
						<?php }if($sigle_product['status']=="Cancelled"){ ?>	
							<button class="btn btn-warning btn-sm">Cancelled</button>
						<?php } ?>	

						<a href="order-details.php?view=<?=$sigle_product['oid']; ?>" class="btn btn-sm btn-primary">View Details</a>
						</td>
					</tr>
				<?php } ?>
				</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include ('footer.php');?>