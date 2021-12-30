

<?php
session_start();
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
                  <div class="regitration-form mt-5 mb-4">
                     <h2 style="font-size: 32px;font-weight: 700;margin-top: 20px;">Customer Registratoin Form</h2>
                     <form class="reg-border regi-form" role="form" action="customer/reg_con.php" method="post" name="myform" enctype="multipart/form-data">
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                     <label for="exampleFormControlInput1"><b>Name</b><span>*</span></label>
                     <input type="text" class="form-control" name="name" placeholder=" " required>
                  </div>
                  <div class="col-md-12">
                  <label for="exampleFormControlInput1"><b>Email Address</b></label>
                  <input type="email" class="form-control" name="email" placeholder=" " >
                  </div>
                  </div>
                  <div class="row">
                  
                  <div class="col-md-12">
                  <label for="exampleFormControlInput1"><b>Phone No</b><span>*</span></label>
                  <input type="tel" name="phone" class="form-control" id="" placeholder=""  minlength="11" maxlength="11" required>
                  </div> 
                  <div class="col-md-12">
                  <label for="exampleFormControlInput1"><b>Password</b><span>*</span></label>
                  <input type="password" name="password" class="form-control" id="" placeholder="" required>
                  </div> 
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                       <label for="exampleFormControlInput1"><b>Image</b></label><br>
                       <input type='file' name='image' id='image' ><br>
                       
                    </div>
                  </div>
                  <div class="row success-account">         
                  <div class="col-md-12">         
                  <?PHP                       
                     if(isset($_SESSION['message'])){
                     echo '<h3>'.$_SESSION['message'].'</h3>';
                     unset($_SESSION['message']);
                     }
                     ?> 
                  <?PHP                       
                     if(isset($_SESSION['error'])){
                     echo '<h3>'.$_SESSION['error'].'</h3>';
                     unset($_SESSION['error']);
                     }
                     ?>           
                  </div>
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
         <div class="col-md-6">
          <img src="images/success.png" alt="">
        </div>
      </div>
      
   </div>
</div>
</div>           

<?php include('footer.php');?>

