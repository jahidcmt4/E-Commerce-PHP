

<?php 

session_start();
$product_ids = array();

if(isset($_POST['submit'])){
if(isset($_SESSION['shopping_cart'])){

$count = count($_SESSION['shopping_cart']);

$product_ids = array_column($_SESSION['shopping_cart'], 'id');

if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
$_SESSION['shopping_cart'][$count] = array
(
 
 'id' => filter_input(INPUT_GET, 'id'),
 'name' => filter_input(INPUT_POST, 'name'),
 'price' => filter_input(INPUT_POST, 'price'),
 'code' => filter_input(INPUT_POST, 'code'),
 'quantity' => filter_input(INPUT_POST, 'quantity')
);   
}
else { 
for ($i = 0; $i < count($product_ids); $i++){
 if ($product_ids[$i] == filter_input(INPUT_GET, 'id')){
     
     $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
 }
}
}

}
else { 
$_SESSION['shopping_cart'][0] = array(
'id' => filter_input(INPUT_GET, 'id'),
'name' => filter_input(INPUT_POST, 'name'),
'price' => filter_input(INPUT_POST, 'price'),
'code' => filter_input(INPUT_POST, 'code'),
'quantity' => filter_input(INPUT_POST, 'quantity')
);
}
header("Location: cart.php");
}
if(isset($_POST['update'])){

$qtys=$_POST['qtys'];

$product_ids = array_column($_SESSION['shopping_cart'], 'id');
$product_id = array_column($_SESSION['shopping_cart'], 'quantity');

for ($i = 0; $i < count($product_ids); $i++){
 if ($product_id[$i] != $qtys[$i]){
     //add item quantity to the existing product in the array
   $_SESSION['shopping_cart'][$i]['quantity']=
      $qtys[$i];
      header("Location: cart.php");
 }
}

}
if(filter_input(INPUT_GET, 'action') == 'delete'){
foreach($_SESSION['shopping_cart'] as $key => $product){
if ($product['id'] == filter_input(INPUT_GET, 'id')){
unset($_SESSION['shopping_cart'][$key]);
}
}
$_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}





?>
<?php include ('header.php');?>
<!-- banner part -->
<div id="cart-banner">
<div class="container">
<div class="row">
<div class="col-md-12">
</div>
</div>
</div>
</div>
<div id="cart-table" class="profile-section">
<div class="container">
<div class="row pt-5 pb-5">
<div class="col-md-12">
<form action="cart.php" method="post">
<table class="table   custom-table">
<thead>
   <tr >
      <th> </th>
      <th>Image</th>
      <th>Product Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Total</th>
   </tr>
</thead>
<tbody>
   <tr>
      <?php
         include('admin/config.php');
         
         if(!empty($_SESSION['shopping_cart'])):  
         
         $total = 0;  
         foreach($_SESSION['shopping_cart'] as $key => $result): 
         ?>
      <th ><a href="cart.php?action=delete&id=<?php echo $result['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to Remove?')">X</a></th>
      <td>
         <?php $a=$result['id']; 
            $query=mysqli_query($con,"SELECT * FROM `products` WHERE `pid`=$a");
            $row = mysqli_fetch_array($query);
            echo' <img src="images/products/'.$row['images'].'" alt="" width="90px">'; ?>
      </td>
      <td>
         <?php echo $result['name']; ?>
      </td>
      <td><b>Tk. <?php echo $result['price'];
         ?></b></td>
      <td class="quantity">
         <input class="changesNo form-control" type="number" id="number" value ="<?php echo $result['quantity'];?>" name="qtys[]" style="width: 120px;">
      <td class="euro"><b>Tk. <?php echo number_format($result['quantity'] * $result['price'], 2); ?></b></td>
      <input  type="hidden" id="number" type="text" name="id[]" value="<?php echo $result["id"];?>">
   </tr>
   <?php 
      $total = $total + ($result['quantity'] * $result['price']); 
      endforeach;  ?> 
   <tr>
      <td colspan="5" class="text-right"></td>
      <td>
         <button  name="update" value="update" type="submit" class="btn btn-primary">Update cart</button>
      </td>
   </tr>
</tbody>
</table>
</div>
</div>
</div>
</form>
<div class="container">
<div class="row justify-content-end pb-5">
<div class="col-md-5   ">
<h3 class="cart-total" style="font-size: 20px;font-weight: 700;margin-top: 0px;">Cart Total</h3>
<table class="table  custom-table table-bd-none">
<tbody >
<tr>
   <th>Total</th>
   <th>TK. <?php echo number_format($total, 2); ?></th>
</tr>
<?php endif;?>
</tbody>
</table>
<div style="text-align: right">
<?php 
if(!empty($_SESSION['shopping_cart'])):   ?>  
<a href="checkout.php" type="button" class="btn btn-success"></span>Proceed To Checkout</a>
<?php endif; ?>
</div>
</div>
</div>
</div>
</div>
<?php include('footer.php');?>

