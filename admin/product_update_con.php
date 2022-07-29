<?php
include('config.php');


if(isset($_POST['submit'])){

$pid=$_POST['pid'];

$prod_image = $_FILES['images']['name'];


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
if(!empty($prod_image)){

$query1 = mysqli_query($con,"select * from products where pid=$pid");
$row = mysqli_fetch_array($query1);


if($row['images']!=NULL){

	$image = $row['images'];
    $file= '../images/products/'.$image;
    unlink($file);
}


$query ="UPDATE products set title='$title', description='$content', category='$category', brand='$brand', sku='$sku', qty='$qty', status='$status', images='$prod_image', regular_price='$regular_price', sale_price='$sale_price' where pid='$pid'";
}else{
	$query ="UPDATE products set title='$title', description='$content', category='$category', brand='$brand', sku='$sku', qty='$qty', status='$status', regular_price='$regular_price', sale_price='$sale_price' where pid='$pid'";
}

if(mysqli_query($con, $query))
{
session_start();
$_SESSION['message']="Your Submited Data Updated Succesfully.";
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