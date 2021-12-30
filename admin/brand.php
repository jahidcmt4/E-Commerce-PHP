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
              <h3 class="box-title">Brand <a href="add_brand.php" class="btn btn-primary btn-sm">Add Brand</a></h3>
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
                    <th>Title</th>
                    <th>Images</th>
                    <th>Action</th>
                  </tr>
                  <?php   
                  $result = mysqli_query($con,"SELECT * FROM brand");
                  while($row = mysqli_fetch_array($result)) {
                  ?>
                  <tr>
                    <td><?=$row['title']; ?></td>
                    <td>
                      <img src="../images/brand/<?=$row['images']; ?>" alt="" width="60" height="40">
                    </td>
                    
                    <td>
                      <a href="brand_edit.php?update=<?=$row['bid'];?>" type="button" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                      <a href="brand_delete.php?delete=<?=$row['bid'];?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to Delete?')"><i class="fa fa-times"></i></a>

                   
                    </td>
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