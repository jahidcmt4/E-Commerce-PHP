<?php
include('../admin/config.php');
session_start(); 


if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$reg_date=date('Y-m-d');
$image = $_FILES['image']['name'];

$target_dir = "../images/customer/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

$check1=mysqli_query($con,"select * from customer where email='$email'");
$checkrows1=mysqli_num_rows($check1);

$check2=mysqli_query($con,"select * from customer where phone='$phone'");
$checkrows2=mysqli_num_rows($check2);


if($checkrows1==0 && $checkrows2==0){

$query ="INSERT INTO `customer`(`image`, `name`, `email`, `phone`, `password`, `reg_date`) VALUES('$image','$name','$email','$phone','$password','$reg_date')";

if(mysqli_query($con, $query))
{
session_start();
$_SESSION['message']="Your Account has been Succesfully Created.";
header("Location:../registration.php");

}

else {
echo "ERROR" . mysqli_error($con);
}
}

if($checkrows1>0){
$_SESSION['message']="<h3 style='color:red'>Email Already exists</h3>";
header("Location:../registration.php");
}
if($checkrows2>0){
$_SESSION['message']="<h3 style='color:red'>Phone Already exists</h3>";
header("Location:../registration.php");
}

}

?> 

<?php 
mysqli_close($con);
?>
