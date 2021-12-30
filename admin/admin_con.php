<?php
include('config.php');
if(isset($_POST["submit"])){

if(!empty($_POST['name']) && !empty($_POST['password'])) {
	$name=$_POST['name'];
	$password=md5($_POST['password']);

	$query=mysqli_query($con,"SELECT * FROM admin WHERE email='".$name."' AND password='".$password."'");
	$numrows=mysqli_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysqli_fetch_assoc($query))
	{
	$dbname=$row['email'];
	$dbpassword=$row['password'];
	}

	if($name == $dbname && $password == $dbpassword)
	{
	session_start();
	$_SESSION['sess_name']="";

	/* Redirect browser */
header("Location:deshboard.php");

	}
	} else {
session_start();
$_SESSION['sess_name']="Invalid Email or Password";
// var_dump($_SESSION['sess_name']);
// exit();

header("Location:index.php");


	}

} else {

session_start();

	$_SESSION['sess_name']="All field are Required";
/*var_dump($_SESSION['sess_name']);
exit();
*/header("Location:index.php");

}
}
?>