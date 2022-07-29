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
        <div class="col-lg-12 col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Customer</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <h3 style="color: green; text-transform: capitalize;font-size: 16px;margin-top: 0px;font-weight: 600;">
               <?php                       
                if(isset($_SESSION['message'])){
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
                ?>
              </h3>
              
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th>Customer</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Password</th>
                  </tr>
                  <?php   
                  $result = mysqli_query($con,"SELECT * FROM customer");
                  while($sigle_product = mysqli_fetch_array($result)) {
                  ?>
                  <tr>
						<td><?=$sigle_product['name']; ?></td>
						<td><?=$sigle_product['phone']; ?></td>
						<td><?=$sigle_product['email']; ?></td>
						<td><?=$sigle_product['password']; ?></td>
						
					</tr>
              <?php } ?>
                </tbody>
              </table>
            </div>

          </div>


        </div>
       

      </div>
      <!-- /.row -->
      <!-- Main row -->
      
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>



<?php include ('footer.php');?>