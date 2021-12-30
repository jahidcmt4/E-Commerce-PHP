
<?php

session_start();
 include('header.php');?>
<?php
if(!isset($_SESSION["session"])){
  header("location:login.php");
} else {
?>
<div id="checkout">
   <div class="">
      <div class="container ">
         <div class="checkout-content">
            <div class="row">
               <div class="col-md-6 cutom-padding">
                  <h3 style="font-size: 24px;font-weight: 700;margin-top: 20px;">Dalivery Address</h3>
                  <form class="checkout-form" role="form" action="customer/checkout_con.php" method="post">
                     <div class="form-group">
                        <label for="exampleFormControlInput1">Customer Name<span>*</span></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="" required="">
                     </div>
                     <div class="form-group">
                        <label for="exampleFormControlInput1">Phone no<span>*</span></label>
                        <input type="tel" class="form-control" name="phone" id="name" minlength="11" maxlength="11" placeholder="" required="">
                     </div>
                     <div class="form-group">
                        <label for="exampleFormControlInput1">Full Address<span>*</span></label>
                        <textarea type="text" class="form-control" name="address" id="name" placeholder="" required=""></textarea>
                        <input type="hidden" name="customer_id" value="<?=$id=$_SESSION['id']; ?>">
                     </div>
               </div>
               <div class="col-md-6 ">
               <div class="checkout-order-list">
               <h3 style="font-size: 24px;font-weight: 700;margin-top: 20px;">Your Product</h3>
               <div class="check-produt-list">
               
               <div class="d-flex chekout-item profile-section">
               <table class="table">
               <tr>
               <th>Product</th>
               <th>QTY</th>
               <th>Total</th>
               </tr>
               <?php 
                  if(isset($_SESSION['shopping_cart'])){
                                $total=0; 
                                foreach($_SESSION['shopping_cart'] as $key => $result):
                  $pds=$result['id'];             
                  $result10=mysqli_query($con,"select * from products where pid='$pds'");
                  $row10=mysqli_fetch_array($result10); ?>
               <tr>
               <td><?php echo $result['name']; ?></td>
               <td><?php echo $result['quantity']; ?></td>
               <td><?php echo $result['price']*$result['quantity']; ?> TK</td>
               </tr>
               <?php $total = $total + ($result['quantity'] * $result['price']); 
                  endforeach;  ?>
               <tr>
               <th colspan="2">Total</th>
               <th><?php echo $total; ?> TK</th>
               </tr>
               </table>
               </div>
               </div>
               <div class="checkout-total">
               <div class="form-group form-check mb-2">
               <input type="radio" class="form-check-input" id="exampleCheck1" value="Cash On Dalivery" checked="">
               <label class="form-check-label" for="exampleCheck1">Cash On Dalivery</label>
               </div>
               </div>
               <div class="checkout-total">
               <button class="checout-btn btn btn-primary"  type='submit' name='submit' value='submit' >Place Order</button>
               </div>
               </form>
               <?php
                  }
                ?>
               </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include ('footer.php');?>

<?php } ?>