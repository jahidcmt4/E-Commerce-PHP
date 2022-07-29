<?php
include('config.php');


if(isset($_POST['submit'])){


$prod_image = $_FILES['images']['name'];

//var_dump($blog_image); exit();

$target_dir = "../images/products/";
$target_file = $target_dir . basename($_FILES["images"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);

$title=mysqli_real_escape_string($con,$_POST['title']);
$content=mysqli_real_escape_string($con,$_POST['content']);
$category=$_POST['category'];
$brand=$_POST['brand'];
$sku=mysqli_real_escape_string($con,$_POST['sku']);
$qty=$_POST['qty'];
$status=$_POST['status'];
$regular_price=$_POST['regular_price'];
$sale_price=$_POST['sale_price'];

$query ="INSERT INTO `products`(`title`, `description`, `images`, `category`, `brand`, `sku`, `qty`,`status`,`regular_price`, `sale_price`)VALUES('$title','$content','$prod_image','$category','$brand','$sku','$qty','$status', '$regular_price', '$sale_price')";


if(mysqli_query($con, $query))
{
session_start();
$_SESSION['message']="Your Submited Data Inserted Succesfully.";
header("Location:products.php");


}

else {
echo "ERROR" . mysqli_error($con);
}
}
?> 

<?php 

mysqli_close($con);
?>