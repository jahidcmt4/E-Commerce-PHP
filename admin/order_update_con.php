<?php
include('config.php');


if(isset($_POST['submit'])){

$cid=$_POST['sorderid'];


$status=$_POST['status'];

$query ="UPDATE orders set status='$status' where oid='$cid'";


if(mysqli_query($con, $query))
{
session_start();
$_SESSION['message']="Order Status Updated Succesfully.";
header("Location:order.php");


}

else {
echo "ERROR" . mysqli_error($con);
}
}
?> 

<?php 

mysqli_close($con);
?>