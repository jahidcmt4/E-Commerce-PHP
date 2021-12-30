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

$query1 = mysqli_query($con,"select * from category where cid=$update");
$row = mysqli_fetch_array($query1);

// var_dump($row); exit();

?>
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
              
              <form action="category_update_con.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <label for="name">Title</label>
                  <input type="text" name="title" value="<?=$row['title']; ?>" class="form-control" required="" />
                  <input type="hidden" name="cid" value="<?=$row['cid']; ?>">
              </div>
              
              <div class="form-group">
                  <label for="name">Image</label><br>
                  <img src="../images/category/<?=$row['images']; ?>" alt="" width="60" height="40">
                  <input type="file" name="images" />
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