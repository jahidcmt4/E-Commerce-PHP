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
              <h3 class="box-title">User <a href="add_user.php" class="btn btn-primary btn-sm">Add User</a></h3>
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                  </tr>
                  <?php   
                  $result = mysqli_query($con,"SELECT * FROM admin");
                  while($row = mysqli_fetch_array($result)) {
                  ?>
                  <tr>
                    <td><?=$row['name']; ?></td>
                    <td><?=$row['email']; ?></td>
                    <td><?=$row['pass_text']; ?></td>
                    
                    
                    <td>
                      <a href="user_edit.php?update=<?=$row['id'];?>" type="button" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                      <a href="user_delete.php?delete=<?=$row['id'];?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to Delete?')"><i class="fa fa-times"></i></a>

                   
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