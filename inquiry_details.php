<?php
include('header.php');

if(!isset($customer_id)){
    header("location: login.php");
}

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM inquiry WHERE id='$id' ") or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($query);
?>
      
        <section class="py-2 border-bottom">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Consult Online</h2>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8">
                        <a name="" id="" class="btn btn-warning" href="inquiry.php" role="button">
                            Back
                        </a>
                        <hr>

                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">
                                    <?php echo $row['subject'] ?>
                                </h6>
                            </div>
                            <div class="card-body">
                               <div class="row">
                                   <div class="col-md-12">
                                    <br>
                                    <div style="text-align: right;">
                                        <span class="alert alert-warning float-left text-left">
                                            <?php echo $row['message'] ?>
                                        </span>
                                    </div>
                                    <br>
                                   <?php
                                    $inquiry_query = mysqli_query($conn, "SELECT * FROM conversation WHERE inquiry_id='$id' ") or die(mysqli_error($conn));
                                    if(mysqli_num_rows($inquiry_query)){
                                    while ($inquiry_row = mysqli_fetch_array($inquiry_query)) {
                                    if ($inquiry_row['sender']!==$customer_id) {
                                    
                                   ?>

                                    <div class="alert alert-success float-left text-left " style="width: 60%;">
                                         <?php echo $inquiry_row['message'] ?>
                                    </div>

                                    <?php }else{ ?>
                                        <br>    
                                    <div style="text-align: right;" class="mb-3">
                                        <span class="alert alert-warning float-left text-left">
                                            <?php echo $inquiry_row['message'] ?>
                                        </span>
                                    </div>
                                    
                                    <?php } } }else{ ?>
                                    
                                        <div class="alert alert-warning" role="alert">
                                            The admin hasnt replied yet
                                        </div>
                                    <?php } ?>

                                    <br>
                                   </div>
                               </div>
                            </div>

                   <div class="card-footer">

                            <form method="post" action="inquiry_send.php">
                                
                                <div class="row">
                                    <div class="col-md-9">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 6rem" data-sb-validations="required" required></textarea>
                                
                                    </div>
                                    <div class="col-md-3">
                                    <button class="btn btn-success btn-md" id="submitButton" type="submit" name="inquiry_button">Send</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                      

                    </div>
                </div>
            </div>
        </section>
       
<?php


include('footer.php')

?>
       
   