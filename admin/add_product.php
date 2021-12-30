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
        <div class="col-lg-6 col-xs-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Add Product </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <form action="product_con.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <label for="name">Title</label>
                  <input type="text" name="title" class="form-control" required="" />
              </div>
              <div class="form-group">
                  <label for="name">Category</label>
                  <select name="category" class="form-control" required="">
                    <option value="">Select One</option>
                    <?php   
                    $categoryresult = mysqli_query($con,"SELECT * FROM category");
                    while($row = mysqli_fetch_array($categoryresult)) {
                    ?>
                    <option value="<?=$row['cid']; ?>"><?=$row['title']; ?></option>
                    <?php } ?>
                  </select>
              </div>
              <div class="form-group">
                  <label for="name">Brand</label>
                  <select name="brand" class="form-control" required="">
                    <option value="">Select One</option>
                    <?php   
                    $brandresult = mysqli_query($con,"SELECT * FROM brand");
                    while($row = mysqli_fetch_array($brandresult)) {
                    ?>
                    <option value="<?=$row['bid']; ?>"><?=$row['title']; ?></option>
                    <?php } ?>
                  </select>
              </div>
              <div class="form-group">
                  <label for="name">SKU</label>
                  <input type="text" name="sku" class="form-control" required="" />
              </div>
              <div class="form-group">
                  <label for="name">QTY</label>
                  <input type="number" name="qty" class="form-control" required="" />
              </div>
              <div class="form-group">
                  <label for="name">Regular Price</label>
                  <input type="text" name="regular_price" class="form-control" required="" />
              </div>
              <div class="form-group">
                  <label for="name">Sale Price</label>
                  <input type="number" name="sale_price" class="form-control" required="" />
              </div>
              <div class="form-group">
                  <label for="name">Description</label>
                  <textarea name="content" class="form-control" required=""></textarea>
              </div>
              <div class="form-group">
                  <label for="name">Image</label>
                  <input type="file" name="images" />
              </div>
              <div class="form-group">
                  <label for="name">Status</label>
                  <select name="status" class="form-control">
                  	<option value="Active">Active</option>
                  	<option value="Deactive">Deactive</option>
                  </select>
              </div>
              <div class="form-group">
                  <button class="btn btn-success btn-sm" type="submit" name="submit">Submit</button>
              </div>
              </form>
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