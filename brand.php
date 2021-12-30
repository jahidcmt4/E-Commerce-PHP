<?php include('header.php') ;?>

<?php
$ctshow = $_GET['show'];

$query1 = mysqli_query($con,"select * from brand where bid=$ctshow");
$row = mysqli_fetch_array($query1);


?>

<div> 
    <h2 class="display-1 text-center" style="font-size: 32px;font-weight: 600;margin-top: 20px;">
     <b>Brand: <?=$row['title']; ?></b>
    </h2></div>
<div class="container">
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        $category_id = $row['bid'];
        $product_result = mysqli_query($con,"SELECT * FROM products where brand=$category_id");
          while($sigle_product = mysqli_fetch_array($product_result)) {
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


<?php include('footer.php') ;?>