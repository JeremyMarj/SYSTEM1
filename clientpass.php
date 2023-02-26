<?php
include_once('include/session.php');

if (isset($_POST['btn_settings'])) {
    # code...
    $id = $_POST['id'];
    $name = $_POST['owner'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    
   if (isset($_POST['password'])) {
       # code...
       $query = mysqli_query($conn, "update users set owner='$owner', email='$email', contact='$contact', password='".md5($_POST['password'])."' where id='$id' ") or die(mysqli_error($conn));

   }else{

    $query = mysqli_query($conn, "update users set owner='$owner', email='$email', contact='$contact', where id='$id' ") or die(mysqli_error($conn));
    
   }

    $_SESSION['success'] = "Edited Successfully";
    header("location:clientchangepass.php");
}
?>