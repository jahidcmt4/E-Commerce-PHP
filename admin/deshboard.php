<?php include ('header.php');?>

<?php include ('sidebar.php');?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php

                    $tproducts = mysqli_query($con,"SELECT * FROM products");
                    $products_total=0;
                 while($sigle_product = mysqli_fetch_array($tproducts)) {
                
                $products_total++; }

                    $ct_result = mysqli_query($con,"SELECT * FROM orders where status='Pending'");
                    $pending=0;
                 while($sigle_product = mysqli_fetch_array($ct_result)) {
                
                $pending++; }

                    $ct_complete_result = mysqli_query($con,"SELECT * FROM orders");
                    $totalsorder=0;
                 while($sigle_product = mysqli_fetch_array($ct_complete_result)) {
                
                $totalsorder++; }

                    $totalcut = mysqli_query($con,"SELECT * FROM customer");
                    $customerss=0;
                 while($sigle_product = mysqli_fetch_array($totalcut)) {
                
                $customerss++; }

                ?>
              <h3><?=$products_total; ?></h3>

              <p>Total Product</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              
              <h3><?=$totalsorder; ?></h3>

              <p>Total Order</p>
            </div>
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$customerss; ?></h3>

              <p>Total Customer</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$pending; ?></h3>

              <p>Pending Order</p>
            </div>
            <div class="icon">
              <i class="fa fa-bed"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      
      

    </section>
    <!-- /.content -->
  </div>



<?php include ('footer.php');?>