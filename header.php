<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
       
    <title>Online Shop</title>
</head>

<?php

include('admin/config.php');
?>  
<?php
$geninfo = mysqli_query($con,"select * from basicinfo where bid=1");
$glob = mysqli_fetch_array($geninfo);

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="images/<?=$glob['logo']; ?>" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php   
                          $allcategory = mysqli_query($con,"SELECT * FROM category");
                          while($singler_row = mysqli_fetch_array($allcategory)) {
                          ?>
                        <li><a class="dropdown-item" href="category.php?show=<?=$singler_row['cid'];?>"><?=$singler_row['title']; ?></a></li>
                        
                        <?php } ?>
                        
                    </ul>
                </li>
                <?php 
                if(!isset($_SESSION["session"])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="registration.php">Signup</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <?php }else{ ?>
                <li class="nav-item">
                    <a class="nav-link" href="customer/deshboard.php">Deshboard</a>
                </li>
            <?php } ?>
            </ul>
            <form class="d-flex" action="search.php" method="get">
                <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<br>