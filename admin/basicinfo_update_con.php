<?php
include('config.php');


if(isset($_POST['submit'])){

$bid=$_POST['bid'];

$logos = $_FILES['images']['name'];

//var_dump($blog_image); exit();

$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["images"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);

$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$facebook=$_POST['facebook'];
$twitter=$_POST['twitter'];
$youtube=$_POST['youtube'];
$linkedin=$_POST['linkedin'];
$map=$_POST['map'];
if(!empty($logos)){

$query1 = mysqli_query($con,"select * from blog where bid=$bid");
$row = mysqli_fetch_array($query1);


if($row['logo']!=NULL){

	$image = $row['logo'];
    $file= '../images/'.$image;
    unlink($file);
}


$query ="UPDATE basicinfo set phone='$phone', email='$email', logo='$logos', address='$address', facebook='$facebook', twitter='$twitter', youtube='$youtube', linkedin='$linkedin', map='$map' where bid='$bid'";
}else{
	$query ="UPDATE basicinfo set phone='$phone', email='$email', address='$address', facebook='$facebook', twitter='$twitter', youtube='$youtube', linkedin='$linkedin', map='$map' where bid='$bid'";
}

if(mysqli_query($con, $query))
{
session_start();
$_SESSION['message']="Your Submited Data Updated Succesfully.";
header("Location:basicinfo.php");


}

else {
echo "ERROR" . mysqli_error($con);
}
}
?> 

<?php 

mysqli_close($con);
?>