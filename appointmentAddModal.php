  <?php
include ('include/connect.php');
include_once('include/session.php');

?>

<div class="modal fade" id="addAppointment">
      <form id="appointmentForm" method="POST">
        <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header bg-pink">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-plus"></i>
                        Create Appointment
                    </h5>
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
                                        <label for="fn">Appointment Concern: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="appointmentTitle"  placeholder="" size="5" autofocus required>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="">Appointment Description: <span style="color:red;">*</span></label>
                                        <textarea class="form-control" name="description" id="appointmentDescription" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                  <label for="">Appointment Time: <span style="color:red;">*</span></label>
                                       <input type="time" class="form-control" id="appointmentTime" name="time" min="09:00" max="18:00" required>
                                    </div>
                                </div> 
                                <div class="row">
                                  <div class="form-group col-sm-12">
                                        <label for="">Conditions: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="appointmentPet" name="pet" placeholder=""  required>
                                    </div>
                                  
                                </div>                               
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer">
                  <div class="btn-group">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  <button type="button" class="btn btn-primary" name="submit" id="requestSubmit"><i class="fa fa-check"></i> Submit</button>
                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>
