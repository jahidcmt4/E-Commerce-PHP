<?php
include('config.php');


if(isset($_POST['submit'])){

$bid=$_POST['bid'];

$prod_image = $_FILES['images']['name'];


$target_dir = "../images/brand/";
$target_file = $target_dir . basename($_FILES["images"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);

$title=mysqli_real_escape_string($con,$_POST['title']);
if(!empty($prod_image)){

$query1 = mysqli_query($con,"select * from brand where bid=$bid");
$row = mysqli_fetch_array($query1);


if($row['images']!=NULL){

	$image = $row['images'];
    $file= '../images/brand/'.$image;
    unlink($file);
}


$query ="UPDATE brand set title='$title', images='$prod_image' where bid='$bid'";
}else{
	$query ="UPDATE brand set title='$title' where bid='$bid'";
}

if(mysqli_query($con, $query))
{
session_start();
$_SESSION['message']="Your Submited Data Updated Succesfully.";
header("Location:brand.php");


}

else {
echo "ERROR" . mysqli_error($con);
}
}
?> 

<?php 

mysqli_close($con);
?>