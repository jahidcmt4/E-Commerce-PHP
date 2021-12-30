
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
						<th>Name</th>
						<th>Price</th>
						<th>QTY</th>
						<th>Sub Total</th>
					</tr>
					<?php
					$customlogin_id=$_GET['view'];
					$allorders = mysqli_query($con,"SELECT * FROM order_history where order_id=$customlogin_id");
					$totals=0;
					 while($sigle_product = mysqli_fetch_array($allorders)) {
					?>
					<tr>
						<td><?=$sigle_product['name']; ?></td>
						<td><?=$sigle_product['price']; ?></td>
						<td><?=$sigle_product['quantity']; ?></td>
						<td>
							<?php
							$subtotals= $sigle_product['price']*$sigle_product['quantity']; 
							echo $subtotals;
							$totals+=$subtotals;
							?>
						</td>
					</tr>
				<?php } ?>
				<tr>
					<th colspan="3">Total</th>
					<th><?=$totals; ?></th>
				</tr>
				</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include ('footer.php');?>