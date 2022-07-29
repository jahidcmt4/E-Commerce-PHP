<?php
include('config.php');


if(isset($_POST['submit'])){



$title=$_POST['title'];
$password=md5($_POST['password']);
$texpassword=$_POST['password'];
$email=mysqli_real_escape_string($con,$_POST['email']);

$query ="INSERT INTO `admin`(`name`, `email`, `pass_text`, `password`)VALUES('$title','$email', $texpassword, '$password')";


if(mysqli_query($con, $query))
{
session_start();
$_SESSION['message']="Your Submited Data Inserted Succesfully.";
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