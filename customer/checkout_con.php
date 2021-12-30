<?php
include('../admin/config.php');



if(isset($_POST['submit'])){
 
$name=$_POST['name'];
$phone=$_POST['phone']; 
$address=$_POST['address'];
$customer_id=$_POST['customer_id'];
$order_date=date('Y-m-d');
$da=0;
$status='Pending';
$pmthod='Cash on Delivary';

$query12 ="INSERT INTO `orders`(`cname`, `phone`,`address`,`customer_id`, `order_date`,`pmethod`, `status`)VALUES('$name','$phone','$address','$customer_id','$order_date','$pmthod','$status')";
   


if(mysqli_multi_query($con,$query12))
{

$insert_order= mysqli_insert_id($con);

session_start();
 $total=0; 
 foreach($_SESSION['shopping_cart'] as $key => $result):
$id=$result['id'];
 $a=$result['name'];
 $b=$result['quantity'];
 $c=$result['price']*$result['quantity'];

$oh_id=$insert_order;
$date=date('Y-m-d');
$query121 ="INSERT INTO `order_history`(`order_id`, `pid`, `name`, `price`, `quantity`, `date`)VALUES('$oh_id','$id', '$a','$c','$b','$date')";
mysqli_query($con,$query121);


endforeach;


$_SESSION['success']="<span style='color:green;font-wight: 700;'><b>Congratulation..Thanks For Being With Us.</b></span>";

header("Location:../thank_you.php");

unset($_SESSION['shopping_cart']); 
session_destroy('shopping_cart');

}else{
  echo "error". mysqli_error($con);
}
}
?> 

<?php 
mysqli_close($con);
?>
