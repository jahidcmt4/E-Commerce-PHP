
<?php
session_start();
include ('header.php');?>


<?php

include('admin/config.php');


$name = trim($_GET['search']);



$i=0;

$result1 = mysqli_query($con,"select * from products where title like '%".$name."%'");



$count=mysqli_num_rows($result1);


if($count==0){
echo "<span style='color:red'>Sorry,There is no search result";


}

else{
?>



<div> 
    <h2 class="display-1 text-center" style="font-size: 32px;font-weight: 600;margin-top: 20px;">
     <b>Search Key: <?=$_GET['search']; ?></b>
    </h2></div>
<div class="container">
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
		<?php

		while($result = mysqli_fetch_array($result1))

		foreach ($result1 as $sigle_product) {

		?>

        <div class="col">
            <div class="card h-100">
                <img src="images/products/<?=$sigle_product['images']; ?>" class="card-img-top" alt="<?=$sigle_product['title']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?=$sigle_product['title']; ?></h5>
                    <h6><b><del><?=$sigle_product['sale_price']; ?></del> - <?=$sigle_product['regular_price']; ?> TK</b></h6>
                </div>
                <div class="card-footer" style="display: flex; align-items: center;">

                    <form method="post" action="cart.php?action=add&id=<?php echo $sigle_product['pid']; ?>">
                    <input type="hidden" name="id" value="<?php echo $sigle_product['pid'];?>">
                    <input type="hidden" name="name" value="<?php echo $sigle_product['title'];?>">
                    <input type="hidden" name="price" value="<?php echo $sigle_product['regular_price'];?>">
                    
                    <input type="hidden" id="number" class="form-control" name="quantity" value="1" style="width: 120px;">

                    <button name="submit" class="btn btn-primary mt-2 mb-2">Buy Now</button>
                    </form>

                    <a href="details.php?show=<?=$sigle_product['pid'];?>" class="btn btn-primary" style="margin-left: 15px;">View Details</a>
                </div>
            </div>
        </div>
        <?php } ?>
        
    </div>
</div>

<?php } ?>



<?php include ('footer.php');?>