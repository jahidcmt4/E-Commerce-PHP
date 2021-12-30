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
              <h3 class="box-title">Order Details</h3>
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
					<th>Customer Name</th>
					<th>Phone </th>
					<th>Address</th>
					<th>Status</th>
				</tr>
                  <?php   
                  $sorder_id=$_GET['view'];
					$orderinfo = mysqli_query($con,"SELECT * FROM orders where oid=$sorder_id");
					$singleinfo = mysqli_fetch_array($orderinfo);

                  ?>
                  <tr>
						<td><?=$singleinfo['cname']; ?></td>
						<td><?=$singleinfo['phone']; ?></td>
						<td><?=$singleinfo['address']; ?></td>
						<td>
						<?php if($singleinfo['status']=="Pending"){ ?>
							<button class="btn btn-info btn-sm">Pending</button>
							
						<?php }if($singleinfo['status']=="Complete"){ ?>	
							<button class="btn btn-success btn-sm">Complete</button>
						
						<?php }if($singleinfo['status']=="Cancelled"){ ?>	
							<button class="btn btn-warning btn-sm">Cancelled</button>
						<?php } ?>	

						</td>
					</tr>
				
                </tbody>
              </table>

              <br><br>

              <table class="table table-bordered">
                <tbody>
                  <tr>
					<th>Product</th>
					<th>Price</th>
					<th>QTY</th>
					<th>Sub Total</th>
				</tr>
                  <?php   
                  $customlogin_id=$_GET['view'];
					$allorders = mysqli_query($con,"SELECT * FROM order_history where order_id=$customlogin_id");
					$totals=0;
				while($sigle_product = mysqli_fetch_array($allorders)) {
                  ?>
                  <tr>
						<td><?=$sigle_product['name']; ?></td>
						<td><?=$sigle_product['price']; ?></td>
						<td><?=$sigle_product['quantity']; ?></td>
						<td>
							<?php
							$subtotals= $sigle_product['price']*$sigle_product['quantity']; 
							echo $subtotals;
							$totals+=$subtotals;
							?>
						</td>
					</tr>
				<?php } ?>
				<tr>
					<th colspan="3">Total</th>
					<th><?=$totals; ?></th>
				</tr>
                </tbody>
              </table>
            </div>

          </div>


        </div>

        <div class="col-md-4">
        	<form action="order_update_con.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  
                  <input type="hidden" name="sorderid" value="<?=$sorder_id; ?>">
              </div>
              
              <div class="form-group">
                  <label for="name">Status</label> 
                  <select name="status" class="form-control">
                  	<option value="Pending" <?php if("Pending"==$singleinfo['status']){ echo "selected='selected'"; } ?>>Pending</option>
                  	<option value="Complete" <?php if("Complete"==$singleinfo['status']){ echo "selected='selected'"; } ?>>Completed</option>
                  	<option value="Cancelled" <?php if("Cancelled"==$singleinfo['status']){ echo "selected='selected'"; } ?>>Cancelled</option>
                  </select>
              </div>
              <div class="form-group">
                  <button class="btn btn-success btn-sm" type="submit" name="submit">Submit</button>
              </div>
              </form>
        </div>
       

      </div>
      <!-- /.row -->
      <!-- Main row -->
      
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>



<?php include ('footer.php');?>
