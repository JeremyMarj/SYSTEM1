<?php
include('admin/include/connect.php');

if (isset($_POST['register_button'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "INSERT INTO users (owner,email,contact,address,password,role_id) VALUES ('$name','$email','$phone','$address','".md5($password)."','3') ") or die(mysqli_error($conn));

    echo "
    <script>
    alert('Register successfully, redirecting to login page');
    window.location.href='login.php';
    </script>
    ";
}


?>