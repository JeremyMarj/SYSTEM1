<?php 
include_once('include/session.php');
    $user = $_SESSION['customer_id'];
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $time = $_POST['time'];
    $sdate = $_POST['start'];
    $edate = $_POST['end'];
    $pet = $_POST['pet'];


    $query = mysqli_query($conn, "insert into appointment (pet,title, description, user_id, start,time,end, status) values ('$pet','$title','$desc','$user','$sdate','$time','$edate','0') ") or die(mysqli_error($conn));
    echo "Added successfully";
    

?>