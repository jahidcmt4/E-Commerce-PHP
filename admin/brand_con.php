<?php
include('config.php');


if(isset($_POST['submit'])){


$prod_image = $_FILES['images']['name'];

//var_dump($blog_image); exit();

$target_dir = "../images/brand/";
$target_file = $target_dir . basename($_FILES["images"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);

$title=mysqli_real_escape_string($con,$_POST['title']);

$query ="INSERT INTO `brand`(`title`, `images`)VALUES('$title','$prod_image')";


if(mysqli_query($con, $query))
{
session_start();
$_SESSION['message']="Your Submited Data Inserted Succesfully.";
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