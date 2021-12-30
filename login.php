<?php

?>
<?php
include('admin/config.php');
?>
<?php include ('header.php');?>

 <div id="registration">
 	<div class="container">
 		<div class="row ">
      
 			<div class="col-md-6">
        
           
          <div class="row">
      <div class="col-md-12">
        <div class="reg-login-form">
          <h2 style="font-size: 32px;font-weight: 700;margin-top: 20px;">Login</h2>
          <form class="reg-border regi-form success-account" action="customer/customer_log_con.php" method="post" name="myform1">
             <?PHP                       
              if(isset($_SESSION['session'])){
                  echo $_SESSION['session'];
                  unset($_SESSION['session']);
              }
              ?>  
            <div class="form-group">
             
              <label for="exampleFormControlInput1"><b>Email</b><span>*</span></label>
              <input type="text" class="form-control" id="" placeholder="" name="email" required="">
            </div>
             
             <div class="form-group">
              <label for="exampleFormControlInput1"><b>Password</b></label>
              <input type="password" class="form-control" id="" placeholder="" name="password" required="">
            </div>
            <button class="btn btn-primary mt-3" style="color: white;" type='submit' name='submit1' value='submit' >LOGIN</button>         
          </form>
        </div>
      </div>
    </div>


 			 
 		</div>

    <div class="col-md-6">
      <img src="images/success.png" alt="">
    </div>
 	
 	</div>
 </div>

<!-- cart total  -->











<!-- footer part start -->

<script>
	function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}
</script>



<?php include('footer.php');?>






