<?php 
 include('include/header.php');
 include('include/sidebar.php');
 include('include/connect.php');

?>

    <style>
         .line {
             border-style: groove;
             border-color: #F89480;
        }
    </style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 line">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
 
              <div class="info-box-content">
                <span class="info-box-text">No. of Customer</span>
                <?php
                $query = "SELECT * FROM users where role_id=3";
                $result = mysqli_query($conn,$query);
                $row = mysqli_num_rows($result);
                echo '<b>'.$row.'</b>';
                 ?>
                <!-- <span class="info-box-number">2</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box line">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-university"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">No. of App. Schedule</span>
                <?php
                $query1 = "SELECT * FROM appointment where requestStatus = 0";
                $result1 = mysqli_query($conn,$query1);
                $row = mysqli_num_rows($result1);
                   echo '<b>'.$row.'</b>';
                 ?>
                <!-- <span class="info-box-number">
                  2
                </span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 line">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-file-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">No. of Inquiry</span>
                 <?php
                $query1 = "SELECT * FROM inquiry";
                $result1 = mysqli_query($conn,$query1);
                $row = mysqli_num_rows($result1);
                   echo '<b>'.$row.'</b>';
                 ?>
              <!--   <span class="info-box-number">2</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 line">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">No. of Admin</span>
                 <?php
                $query1 = "SELECT * FROM users where role_id = 1";
                $result1 = mysqli_query($conn,$query1);
                $row = mysqli_num_rows($result1);
                   echo '<b>'.$row.'</b>';
                 ?>
                <!-- <span class="info-box-number">0</span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4"></div>
          <!-- /.col -->
         
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
          <div class="col-12 col-sm-6 col-md-4">
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        
        <!-- <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-left: 45%"><b> REPORT</b></h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div> -->
              <!-- /.card-header -->
             <!--  <div class="card-body">
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-12">
                    <h4><p class="text-center">
                      Request Process per Month
                    </p></h4> -->

                   <!--  <div id="bar-chart" style="height: 300px;"></div> -->
                    <!-- /.chart-responsive -->
                 <!--  </div>
                  <div class="col-md-3"></div>
                </div> -->
                <!-- /.row -->
             <!--  </div> -->
              <!-- ./card-body -->
              <!-- <div class="card-footer"></div> -->
              <!-- /.card-footer -->
           <!--  </div> -->
            <!-- /.card -->
         <!--  </div> -->
          <!-- /.col -->
        <!-- </div> -->
        <!-- /.row -->

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php include('include/footer.php'); ?>