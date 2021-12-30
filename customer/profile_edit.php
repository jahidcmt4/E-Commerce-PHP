
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
					$id=$_SESSION['id'];

					$query1 = mysqli_query($con,"select * from customer where id='$id'");
					$rows = mysqli_fetch_array($query1);
					?>
					<div class="col-md-12">
                  <div class="regitration-form">
                     <h2 style="font-size: 32px;font-weight: 700;margin-top: 0px;">Profile Edit</h2>
                     <form class="reg-border regi-form" role="form" action="reg_con_update.php" method="post" name="myform" enctype="multipart/form-data">
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                     <label for="exampleFormControlInput1"><b>Name</b><span>*</span></label>
                     <input type="text" class="form-control" name="name" value="<?=$rows['name']; ?>" placeholder=" " required>
                     <input type="hidden" class="form-control" name="cid" value="<?=$rows['id']; ?>">
                  </div>
                  <div class="col-md-12">
                  <label for="exampleFormControlInput1"><b>Email Address</b></label>
                  <input type="email" class="form-control" value="<?=$rows['email']; ?>" name="email" placeholder=" " readonly="">
                  </div>
                  </div>
                  <div class="row">
                  
                  <div class="col-md-12">
                  <label for="exampleFormControlInput1"><b>Phone No</b><span>*</span></label>
                  <input type="tel" name="phone" class="form-control" value="<?=$rows['phone']; ?>" id="" placeholder=""  minlength="11" maxlength="11" required  readonly="">
                  </div> 
                  <div class="col-md-12">
                  <label for="exampleFormControlInput1"><b>Password</b><span>*</span></label>
                  <input type="text" name="password" readonly="" class="form-control" value="<?=$rows['password']; ?>" id="" placeholder="" required>
                  </div> 
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                       <label for="exampleFormControlInput1"><b>Image</b></label><br>
                       <?php
						if (!empty($rows['image'])) {
						?>
						<img src="../images/customer/<?=$rows['image']; ?>" alt="" width="60">

						<?php } ?>

						<br>
                       <input type='file' name='images' id='image' ><br>
                       
                    </div>
                  </div>
                  <div class="row success-account">         
                  
                  </div>
                  
                  <div class="row mt-3">
                    <div class="col-md-12">
                      <button class="btn btn-primary" style="color: white;" type='submit' name='submit' value='submit' >Submit</button>
                    </div>
                  </div>
                  </form>
               </div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

<?php include ('footer.php');?>