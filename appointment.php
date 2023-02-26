<?php
include('include/header.php');
include('include/sidebar.php');
?>

  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Appointments</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Appointments</li>
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
                
                <div class="card-header">
                  <?php
                   if($role=="1") {
                    ?>
                  <!--  <a href="calendar.php" class="btn-primary btn-sm float-sm-left">View Calendar</a> -->
                    <h3 class="card-title" style="margin-left: 40%"><b>LIST OF APPOINTMENT</b></h3>
                  <?php } ?>
                <?php
                if ($role=="3") {
                ?>
                <a class="btn btn-primary" href="calendar.php">
                        <i class="fa fa-plus-circle"></i>
                    Add appointment
                </a>
                <?php } ?>

                </div>
              
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

                <table id="example1" class="table table-bordered table-striped">

                  <thead>
                  <tr>
                    <th>Made By</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Status</th>
                    
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  $page = "appointments";
                    if ($role=="1") {
                      # code...
                      $query = mysqli_query($conn, "select * from appointment ") or die(mysqli_error($conn));
                    }else{
                      $query = mysqli_query($conn, "select * from appointment where user_id='$customer_id' ") or die(mysqli_error($conn));
                    }
                    
                    while($row = mysqli_fetch_array($query)){
                      $id = $row['id'];
                    $userQuery = mysqli_query($conn, "select *  from users where id='".$row['user_id']."' ") or die(mysqli_error($conn));
                    $userRow = mysqli_fetch_assoc($userQuery);

                  ?>
                  <tr>

                  <td>
                        <?php echo $userRow['owner']; ?>
                  </td>
            
                    <td>
                      <?php echo $row['title']; ?>
                    </td>
                    <td class="text-center"> 
                      <?php echo $row['description'] ?>
                    </td>

                    <td>
                        <?php echo date("d(D)-M-Y",strtotime($row['start'])) ?>
                    </td>
                     <td>
                         <?php echo date("h:i:sa",strtotime($row['time']))?> 
                    </td>
                    
                    <td>
                        <?php if ($row['status']=='0') {
                            echo '<span class="text-warning">Pending</span>';
                        }elseif ($row['status']=='1') {
                            echo '<span class="text-success">Approved</span>';
                        }else{
                            echo '<span class="text-danger">Reject</span>';
                        } ?>
                    </td>
                  
                    <td>
                      
                     <div class="btn-group">
                     <form action="delete.php" method="post">
              <input type="hidden" name="appointment_id" value="<?php echo $id; ?>">
              <button type="submit" name="btn_appointment" class="btn btn-danger btn-sm"><i class='fas fa-trash-alt'></i> Delete</button>
              </form>
                      </div>
                    </td>
                  </tr>
                  <?php
                include("deleteModal.php");
                
                
                } ?>
                  
                  </tbody>
                 
                </table>
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
