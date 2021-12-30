<?php
include('config.php');



$delete = $_GET['delete'];

//var_dump($delete); exit();


$query1 = mysqli_query($con,"select * from category where cid=$delete");
$row = mysqli_fetch_array($query1);


if($row['images']!=NULL){

	$image = $row['images'];
    $file= '../images/category/'.$image;
    unlink($file);
}
             
$query ="DELETE FROM category where cid=$delete";

if(mysqli_query($con, $query))
{
session_start();
$_SESSION['message']="Your Data Deleted Succesfully.";
header("Location:category.php");


}

else {
echo "ERROR" . mysqli_error($con);

}
?> 

<?php 

mysqli_close($con);
?>