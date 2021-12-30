<?php
session_start();
include('../admin/config.php');
if(isset($_POST["submit1"])){
	// echo 'ok';
	// exit();

if(!empty($_POST['email']) && !empty($_POST['password'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];

	$query=mysqli_query($con,"SELECT * FROM customer WHERE email='".$email."' AND password='".$password."'");
	 $numrows=mysqli_num_rows($query);
	 
	if($numrows!=0)
	{
	while($row=mysqli_fetch_assoc($query))
	{
	$a=$row['id'];
	$_SESSION['id']=$a;
	$_SESSION['email']=$row['email'];

	$dbname=$row['email'];
	$dbpassword=$row['password'];
	

	}

	if($email == $dbname && $password == $dbpassword)
	{

	
	$_SESSION['session']=" ";

header("Location:deshboard.php");

	}
	} else {
session_start();
$_SESSION['session']="<h3 style='color:red'>Invalid Email or Password</h3>";

header("Location:../login.php");

	}

} else {

session_start();

	$_SESSION['session']="<h3 style='color:red'>All field are Required</h3>";
	header("Location:../login.php");
}
}
?>