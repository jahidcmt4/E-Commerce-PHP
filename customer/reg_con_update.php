<?php
include('../admin/config.php');


if(isset($_POST['submit'])){

$cid=$_POST['cid'];

$prod_image = $_FILES['images']['name'];


$target_dir = "../images/customer/";
$target_file = $target_dir . basename($_FILES["images"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);

$title=$_POST['name'];
$password=$_POST['password'];
if(!empty($prod_image)){

$query1 = mysqli_query($con,"select * from customer where id=$cid");
$row = mysqli_fetch_array($query1);


if($row['images']!=NULL){

	$image = $row['images'];
    $file= '../images/customer/'.$image;
    unlink($file);
}


$query ="UPDATE customer set name='$title',password='$password', image='$prod_image' where id='$cid'";
}else{
	$query ="UPDATE customer set name='$title',password='$password', where id='$cid'";
}

if(mysqli_query($con, $query))
{
session_start();
$_SESSION['message']="<h3 style='color:green;font-size; 24px;font-weight: 600;'>Your Profile Updated Succesfully.</h3>";
header("Location:profile.php");


}

else {
echo "ERROR" . mysqli_error($con);
}
}
?> 

<?php 

mysqli_close($con);
?>