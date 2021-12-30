<?php 

session_start();
   ?>
<?php include ('header.php');?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="thanks-message text-center">
				<?PHP                       
                  if(isset($_SESSION['success'])){
                      echo $_SESSION['success'];
                      unset($_SESSION['success']);
                  }
                ?> 
			</div>
		</div>
	</div>
</div>

<?php include ('footer.php');?>

