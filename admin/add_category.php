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
              <h3 class="box-title">Add Category </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <form action="category_con.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <label for="name">Title</label>
                  <input type="text" name="title" class="form-control" required="" />
              </div>
              
              <div class="form-group">
                  <label for="name">Image</label>
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