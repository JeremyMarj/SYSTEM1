<?php
include('include/header.php');
include('include/sidebar.php');

$userQuery = mysqli_query($conn, "select *  from users where id='".$email."' ") or die(mysqli_error($conn));
$userRow = mysqli_fetch_assoc($userQuery);



?>

  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Settings</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                
                
              <!-- /.card-header -->
              <div class="card-body">
                  <?php if (isset($_SESSION['error'])) { ?>
                  <div class="alert alert-warning text-center">
                    <?php echo $_SESSION['error']; ?>
                  </div>
                  <?php }
                  unset($_SESSION['error']);
                  ?>

                <?php if (isset($_SESSION['success'])) { ?>
                  <div class="alert alert-success text-center">
                    <?php echo $_SESSION['success']; ?>
                  </div>
                  <?php }
                  unset($_SESSION['success']);

                  ?>

                  <div class="card-body">
                        <form method="POST" action="clientpass.php">
                        <input name="id" value="<?php echo $user_id; ?>" type="hidden">
                        <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="fn">Fullname: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" class="form-control" id="fn" name="name" placeholder="Fullname" size="5" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="cn">Contact: <span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" maxlength="11" id="cn" name="contact" placeholder="Contact Number" size="40">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="email">Email: <span style="color:red;">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" size="40" >
                                    </div>
                                </div>
                               
                                
                                <div class="row">
    
                                    <div class="form-group col-sm-12">
                                        <label for="password">Password: <span style="color:red;">*</span></label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" size="40">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                            <button class="btn btn-success" name="btn_settings" type="submit" >
                                 Save
                            </button>
                            </div>
                        </form>
                  </div>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
      <!--ALL TARGET MODAL-->
    
       
      </div>
  <!-- /.content-wrapper -->
 <?php include('include/footer.php') ?>
