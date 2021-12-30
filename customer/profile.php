
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
					<?php
					$id=$_SESSION['id'];

					$query1 = mysqli_query($con,"select * from customer where id='$id'");
					$rows = mysqli_fetch_array($query1);
					?>
					<div class="col-md-3">
						<?php
						if (!empty($rows['image'])) {
						?>
						<img src="../images/customer/<?=$rows['image']; ?>" alt="" class="img-fluid">

						<?php } ?>

						<a href="profile_edit.php" class="btn btn-primary">Edit Profile</a>
					</div>
					<div class="col-md-9">
						<table class="table">
					
					<tr>
						<th>Name</th>
						<td><?=$rows['name']; ?></td>
						<th>Email</th>
						<td><?=$rows['email']; ?></td>
					</tr>
					<tr>
						<th>Phone</th>
						<td><?=$rows['phone']; ?></td>
						<th>Password</th>
						<td><?=$rows['password']; ?></td>
					</tr>
				</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include ('footer.php');?>