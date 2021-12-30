<?php
include('../admin/config.php');


$delete = $_GET['delete'];


$status="Cancelled";

$query ="UPDATE orders set status='$status' where oid='$delete'";


if(mysqli_query($con, $query))
{
session_start();
$_SESSION['message']="Your Submited Data Updated Succesfully.";
header("Location:order.php");


}

else {
echo "ERROR" . mysqli_error($con);
}

?> 

<?php 

mysqli_close($con);
?>