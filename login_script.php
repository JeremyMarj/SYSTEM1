<?php
session_start();

include('admin/include/connect.php');

if (isset($_POST['login_button'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' && password='".md5($password)."' && role_id='3' ") or die(mysqli_error($conn));
    if (mysqli_num_rows($query)) {
        $row = mysqli_fetch_assoc($query);

        $_SESSION['customer_id'] = $row['id'];
        echo "
        <script>
        alert('Login successfully');
        window.location.href='home.php';
        </script>
        ";

        
    }else{

    echo "
    <script>
    alert('Login failed');
    window.location.href='login.php';
    </script>
    ";

    }
}


?>