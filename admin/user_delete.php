<?php
include('config.php');



$delete = $_GET['delete'];


             
$query ="DELETE FROM admin where id=$delete";

if(mysqli_query($con, $query))
{
session_start();
$_SESSION['message']="Your Data Deleted Succesfully.";
header("Location:users.php");


}

else {
echo "ERROR" . mysqli_error($con);

}
?> 

<?php 

mysqli_close($con);
?>