<?php
include('config.php');


if(isset($_POST['submit'])){

$cid=$_POST['bid'];

//exit();

$title=$_POST['title'];
$textpassword=$_POST['password'];
$password=md5($_POST['password']);
$email=mysqli_real_escape_string($con,$_POST['email']);

$query ="UPDATE admin set name='$title', email='$email', pass_text='$textpassword', password='$password' where id='$cid'";


if(mysqli_query($con, $query))
{
session_start();
$_SESSION['message']="Your Submited Data Updated Succesfully.";
header("Location:users.php");


}

else {
echo "ERROR" . mysqli_error($con);
}
}
?> 

<?php 

mysqli_close($con);
?>