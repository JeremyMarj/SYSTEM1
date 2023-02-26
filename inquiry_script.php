<?php
session_start();

$customer_id = $_SESSION['customer_id'];

include('admin/include/connect.php');

if (isset($_POST['inquiry_button'])) {

    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $query = mysqli_query($conn, "INSERT INTO inquiry (customer_id, subject, message) VALUES('$customer_id','$subject','$message') ") or die(mysqli_error($conn));
echo "
    <script>
    alert('Message successfully Sent');
    window.location.href='inquiry.php';
    </script>
    ";

    
}

?>