<?php 
session_start();
include('admin/include/connect.php');

if (isset($_SESSION['customer_id'])) {
    $customer_id = $_SESSION['customer_id'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> CareTech Application</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#34495E ;">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">CareTech Application</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="./">Home</a></li>
                        <?php if(!isset($_SESSION['customer_id'])){ ?>
                        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                       <!--  <li class="nav-item"><a class="nav-link" href="admin/login.php">Go to dashboard</a></li> -->
                        <?php }else { ?>
                        <li class="nav-item"><a class="nav-link" href="inquiry.php">Message</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="dashboard.php">Go to dashboard</a></li>

                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>