<?php
session_start();

$customer_id = $_SESSION['customer_id'];

include('admin/include/connect.php');

if (isset($_POST['inquiry_button'])) {

    $message = $_POST['message'];
    $inquiry_id = $_POST['id'];

    $query = mysqli_query($conn, "INSERT INTO conversation (inquiry_id, sender, message) VALUES('$inquiry_id','$customer_id','$message') ") or die(mysqli_error($conn));

    header("location:".$_SERVER["HTTP_REFERER"]);

    
}


?>