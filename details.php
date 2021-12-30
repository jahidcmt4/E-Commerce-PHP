<?php include('header.php') ;?>

<?php
$ctshow = $_GET['show'];

$query2 = mysqli_query($con,"select * from products where pid=$ctshow");
$sigle_product = mysqli_fetch_array($query2);


?>

<div> 
    </div>
<div class="container">
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        
        <div class="col-md-4">
        
            <img src="images/products/<?=$sigle_product['images']; ?>" class="img-fluid" alt="<?=$sigle_product['title']; ?>">
        </div>
        <div class="col-md-8">
        	<h2 style="font-size: 20px;font-weight: 600;margin-top: 0px;">
     		<b><?=$sigle_product['title']; ?></b>
    		</h2>
    		<p><?=$sigle_product['description']; ?></p>
    		<h6><b>Price: <del><?=$sigle_product['sale_price']; ?></del> - <?=$sigle_product['regular_price']; ?> TK</b></h6>


            <form method="post" action="cart.php?action=add&id=<?php echo $sigle_product['pid']; ?>">
            <input type="hidden" name="id" value="<?php echo $sigle_product['pid'];?>">
            <input type="hidden" name="name" value="<?php echo $sigle_product['title'];?>">
            <input type="hidden" name="price" value="<?php echo $sigle_product['regular_price'];?>">
            <label for=""><b>QTY: </b></label>
            <input type="number" id="number" class="form-control" name="quantity" value="1" style="width: 120px;">

            <button name="submit" class="btn btn-primary mt-2 mb-2">Buy Now</button>
            </form>
    		<h6>
    			<?php
    			$ctid=$sigle_product['category'];
    			$query1 = mysqli_query($con,"select * from category where cid=$ctid");
				$category_row = mysqli_fetch_array($query1);
    			?>
    			<b>Category: <a href="category.php?show=<?=$category_row['cid']; ?>"><?=$category_row['title']; ?></a></b>

    		</h6>
    		<h6>
    			<?php

    			$btid=$sigle_product['brand'];
    			$query3 = mysqli_query($con,"select * from brand where bid=$btid");
				$brand_row = mysqli_fetch_array($query3);
    			?>
    			<b>Brand: <a href="brand.php?show=<?=$brand_row['bid']; ?>"><?=$brand_row['title']; ?></a></b>

    		</h6>
        </div>
    </div>
</div>


<?php include('footer.php') ;?>