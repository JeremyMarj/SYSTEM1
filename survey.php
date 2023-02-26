<?php 
 include('include/header.php');
 include('include/sidebar.php');

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="contentSection">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Welcome Client!</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Customer</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="contentSection">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-header">
                <button class="btn bg-pink btn-md" data-toggle="modal" data-target="#add"><i class="fa fa-check"></i>
                    Take a survey
                </button>
              </div>
               <?php include_once("surveymodal.php"); ?>
               <div class="contentSection">
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
            
                  <?php

           $page = "survey";
                    if ($role=="1") {
                      # code...
                      $query = mysqli_query($conn, "select * from survey ") or die(mysqli_error($conn));
                    }else{
                      $query = mysqli_query($conn, "select * from survey where question1='$question1' ") or die(mysqli_error($conn));
                    }
                    
                    while($row = mysqli_fetch_array($query)){
                      $id = $row['id'];
                    $userQuery = mysqli_query($conn, "select *  from users where question1='".$row['question1']."' ") or die(mysqli_error($conn));
                    $userRow = mysqli_fetch_assoc($userQuery);



                           ?>
                  <tr>
                    <td> 
                    <?php echo $i++; ?>
                    </td>
                    <td>
                      <?php echo $row['question2']; ?>
                    </td>
                    <td>
                      <?php echo $row['question3']; ?>
                    </td>
                    <td>
                      <?php echo $row['question4']; ?>
                    </td>
                    <td>
                      <?php echo $row['question5']; ?>
                    </td>
                    <td> 
                    <?php echo $row['question6']; ?>
                    </td>
                   <td>
                      <?php echo $row['question7']; ?>
                    </td>
                    <td>
                      <?php echo $row['question8']; ?>
                    </td>
                    <td>
                      <?php echo $row['questiion9']; ?>
                    </td>
                    <td>
                      <?php echo $row['question10']; ?>
                    </td>
                     <td> 
                    <?php echo $row['question11']; ?>
                    </td>
                   <td>
                      <?php echo $row['question12']; ?>
                    </td>
                    <td>
                      <?php echo $row['question13']; ?>
                    </td>
                    <td>
                      <?php echo $row['questiion14']; ?>
                    </td>
                    <td>
                      <?php echo $row['question15']; ?>
                    </td>
                     <td> 
                    <?php echo $row['question16']; ?>
                    </td>
                   <td>
                      <?php echo $row['question17']; ?>
                    </td>
                    <td>
                      <?php echo $row['question18']; ?>
                    </td>
                    <td>
                      <?php echo $row['questiion19']; ?>
                    </td>
                    <td>
                      <?php echo $row['question20']; ?>
                    </td>
                    
                 
       <?php
       include('survey.php');
       include('survey.php');
      
      } ?>
                  </tbody>
                 
                </table>
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
      
  

   <div class="modal fade" id="card1">
      <form role="form" id="quickForm1" enctype="multipart/form-data">
        <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                  <h5 class="modal-title" style="margin-left:35%"><i class="fa fa-spinner"> Update ID</i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="cc">Card Category Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Primary ID" class="form-control" id="cc" name="card_category" placeholder="Card Category" size="5" autofocus required>
                                    </div>
                                </div>
                                    <div class="form-group col-sm-12">
                                        <label for="cd">Card Description: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Card Description" id="cd" name="dscrptn" placeholder="Card Description" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="ct">Card Type: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="School ID" id="ct" name="card_type" placeholder="Card Type" size="40" required>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>
  <div class="modal fade" id="card2">
      <form role="form" id="quickForm2" enctype="multipart/form-data">
        <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                  <h5 class="modal-title" style="margin-left:35%"><i class="fa fa-spinner"> Update ID</i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="cc">Card Category Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" class="form-control" value="Primary ID" id="cc" name="card_category" placeholder="Card Category" size="5" autofocus required>
                                    </div>
                                </div>
                                    <div class="form-group col-sm-12">
                                        <label for="cd">Card Description: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Card Description   " id="cd" name="dscrptn" placeholder="Card Description" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="ct">Card Type: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Company ID" id="ct" name="card_type" placeholder="Card Type" size="40" required>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>

  <div class="modal fade" id="card1">
      <form role="form" id="quickForm1" enctype="multipart/form-data">
        <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                  <h5 class="modal-title" style="margin-left:35%"><i class="fa fa-spinner"> Update ID</i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="cc">Card Category Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Primary ID" class="form-control" id="cc" name="card_category" placeholder="Card Category" size="5" autofocus required>
                                    </div>
                                </div>
                                    <div class="form-group col-sm-12">
                                        <label for="cd">Card Description: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Card Description" id="cd" name="dscrptn" placeholder="Card Description" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="ct">Card Type: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="School ID" id="ct" name="card_type" placeholder="Card Type" size="40" required>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>
  <div class="modal fade" id="card2">
      <form role="form" id="quickForm2" enctype="multipart/form-data">
        <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                  <h5 class="modal-title" style="margin-left:35%"><i class="fa fa-spinner"> Update ID</i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="cc">Card Category Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" class="form-control" value="Primary ID" id="cc" name="card_category" placeholder="Card Category" size="5" autofocus required>
                                    </div>
                                </div>
                                    <div class="form-group col-sm-12">
                                        <label for="cd">Card Description: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Card Description   " id="cd" name="dscrptn" placeholder="Card Description" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="ct">Card Type: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Company ID" id="ct" name="card_type" placeholder="Card Type" size="40" required>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>
  <div class="modal fade" id="card3">
      <form role="form" id="quickForm3" enctype="multipart/form-data">
        <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                  <h5 class="modal-title" style="margin-left:35%"><i class="fa fa-spinner"> Update ID</i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="cc">Card Category Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Primary ID" class="form-control" id="cc" name="card_category" placeholder="Card Category" size="5" autofocus required>
                                    </div>
                                </div>
                                    <div class="form-group col-sm-12">
                                        <label for="cd">Card Description: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Card Description" id="cd" name="dscrptn" placeholder="Card Description" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="ct">Card Type: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="SSS ID" id="ct" name="card_type" placeholder="Card Type" size="40" required>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
              </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary" name="btn_add"><i class="fa fa-check"></i> Submit</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>
  <div class="modal fade" id="card4">
      <form role="form" id="quickForm4" enctype="multipart/form-data">
        <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                  <h5 class="modal-title" style="margin-left:35%"><i class="fa fa-spinner"> Update ID</i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="cc">Card Category Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Primary ID" class="form-control" id="cc" name="card_category" placeholder="Card Category" size="5" autofocus required>
                                    </div>
                                </div>
                                    <div class="form-group col-sm-12">
                                        <label for="cd">Card Description: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Card Description" id="cd" name="dscrptn" placeholder="Card Description" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="ct">Card Type: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="UMID" id="ct" name="card_type" placeholder="Card Type" size="40" required>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>
  <div class="modal fade" id="card5">
      <form role="form" id="quickForm5" enctype="multipart/form-data">
        <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                  <h5 class="modal-title" style="margin-left:35%"><i class="fa fa-spinner"> Update ID</i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="cc">Card Category Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Secondary ID" class="form-control" id="cc" name="card_category" placeholder="Card Category" size="5" autofocus required>
                                    </div>
                                </div>
                                    <div class="form-group col-sm-12">
                                        <label for="cd">Card Description: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Card Description" id="cd" name="dscrptn" placeholder="Card Description" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="ct">Card Type: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Philhealth ID" id="ct" name="card_type" placeholder="Card Type" size="40" required>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>
  <div class="modal fade" id="card6">
      <form role="form" id="quickForm6" enctype="multipart/form-data">
        <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                  <h5 class="modal-title" style="margin-left:35%"><i class="fa fa-spinner"> Update ID</i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="cc">Card Category Name: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Secondary ID" class="form-control" id="cc" name="card_category" placeholder="Card Category" size="5" autofocus required>
                                    </div>
                                </div>
                                    <div class="form-group col-sm-12">
                                        <label for="cd">Card Description: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Card Description" id="cd" name="dscrptn" placeholder="Card Description" size="40" required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="ct">Card Type: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" value="Postal ID" id="ct" name="card_type" placeholder="Card Type" size="40" required>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>
       <div class="modal fade" id="delete">
        <div class="modal-dialog" style="width:400px !important;">
            <form action="">
              <div class="modal-content">
                <div class="modal-header bg-danger">
                  <h6 class="modal-title" style="margin-left:20%">Are you sure you want delete?</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> No</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Yes </button>

                

                </div>
              </div>
              </form>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
      </div>


      <?php include('include/footer.php'); ?>
