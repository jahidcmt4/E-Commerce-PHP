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
<?php
$update = $_GET['update'];

$query1 = mysqli_query($con,"select * from basicinfo where bid=$update");
$row = mysqli_fetch_array($query1);

// var_dump($row); exit();

?>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Basic Info </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <form action="basicinfo_update_con.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                  <label for="name">Phone</label>
                  <input type="text" name="phone" value="<?=$row['phone']; ?>" class="form-control" required="" />
                  <input type="hidden" name="bid" value="<?=$row['bid']; ?>">
                 </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <label for="name">Email</label>
                  <input type="text" name="email" value="<?=$row['email']; ?>" class="form-control" required="" />
                 </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                  <label for="name">Facebook</label>
                  <input type="text" name="facebook" value="<?=$row['facebook']; ?>" class="form-control" required="" />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <label for="name">Twitter</label>
                  <input type="text" name="twitter" value="<?=$row['twitter']; ?>" class="form-control" required="" />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <label for="name">Linkedin</label>
                  <input type="text" name="linkedin" value="<?=$row['linkedin']; ?>" class="form-control" required="" />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <label for="name">Youtube</label>
                  <input type="text" name="youtube" value="<?=$row['youtube']; ?>" class="form-control" required="" />
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="name">Address</label>
                  <input type="text" name="address" value="<?=$row['address']; ?>" class="form-control" required="" />
                 </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="name">Logo</label> <br>
                  <input type="file" name="images" />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                  <label for="name">Map</label>
                  <textarea name="map" class="form-control" required=""><?=$row['map']; ?></textarea>
                  </div>
                </div>
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