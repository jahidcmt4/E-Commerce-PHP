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
              <h3 class="box-title">Basic Info</h3>
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
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Logo</th>
                    <th>Facebook</th>
                    <th>Twitter</th>
                    <th>Youtube</th>
                    <th>Action</th>
                  </tr>
                  <?php   
                  $query1 = mysqli_query($con,"select * from basicinfo where bid=1");
                  $row = mysqli_fetch_array($query1);
                  ?>
                  <tr>
                    <td><?=$row['phone']; ?></td>
                    <td><?=$row['email']; ?></td>
                    <td><?=$row['address']; ?></td>
                    <td>
                      <img src="../images/<?=$row['logo']; ?>" alt="" width="60" height="40">
                    </td>
                    <td><?=$row['facebook']; ?></td>
                    <td><?=$row['twitter']; ?></td>
                    <td><?=$row['youtube']; ?></td>
                    
                    <td>
                      <a href="basicinfo_edit.php?update=<?=$row['bid'];?>" type="button" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>

                   
                    </td>
                  </tr>

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