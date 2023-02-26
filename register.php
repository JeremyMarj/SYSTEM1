<?php
include('header.php');
?>
     
       
        <!-- Contact section-->
        <section class="bg-light py-3">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-lock"></i></div>
                    <h2 class="fw-bolder">Client Registration</h2>
                    <p class="lead mb-0">Please fill in the required fields</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                       
                        <form id="contactForm" action="register_script.php" method="POST">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" name="name"  required/>
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" required />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" required />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>

                            

                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" name="address" type="text" placeholder="Enter your message here..." style="height: 6rem" data-sb-validations="required" required></textarea>
                                <label for="message">Address</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" name="password" type="password"  data-sb-validations="required" required/>
                                <label for="password">Password</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" id="submitButton" type="submit" name="register_button">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
<?php


include('footer.php')

?>