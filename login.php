<?php
include('header.php');
?>
     
       
        <!-- Contact section-->
        <section class="bg-light py-3">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-lock"></i></div>
                    <h2 class="fw-bolder">Client Login</h2>
                   
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                       
                        <form id="contactForm" action="login_script.php" method="POST">
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" required />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                           

                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" name="password" type="password"  data-sb-validations="required" required/>
                                <label for="password">Password</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" id="submitButton" type="submit" name="login_button">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
<?php


include('footer.php')

?>