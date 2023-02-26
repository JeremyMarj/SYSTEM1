<?php
include('header.php');

if(!isset($customer_id)){
    header("location: login.php");
}
?>
     
       
        <!-- Contact section-->
        <section class="bg-light py-3">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h2 class="fw-bolder">Create an inquiry</h2>
                    <p class="lead mb-0">Please fill in the required fields</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                       
                        <form id="contactForm" action="inquiry_script.php" method="POST">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter the subject here..." data-sb-validations="required" name="subject"  required/>
                                <label for="name">Subject</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 6rem" data-sb-validations="required" required></textarea>
                                <label for="message">Message</label>
                                
                            </div>

                            
                            <div class="d-grid">
                                <button class="btn btn-success btn-lg" id="submitButton" type="submit" name="inquiry_button">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
<?php


include('footer.php')

?>