<?php
session_start();
include('admin/config/dbconn.php');

if (isset($_POST['login_btn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, MD5($_POST['password']));

    $login_query = "SELECT * FROM tblusers WHERE email='$email' AND password='$password' LIMIT 1";
    $login_query_run = mysqli_query($conn, $login_query);

    if (mysqli_num_rows($login_query_run) > 0) {

        foreach ($login_query_run as $data) {
            $user_id = $data['id'];
            $user_fname = $data['fname'];
            $user_lname = $data['lname'];
            $user_email = $data['email'];
        }

        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            "user_id" => $user_id,
            "user_fname" => $user_fname,
            "user_lname" => $user_lname,
            "user_email" => $user_email
        ];

        if ($_SESSION['auth'] = true) {
            $_SESSION['message'] = "Welcome ". $user_fname;
            header('location: admin/index.php');
            exit(0);
        }

    } else {
        $_SESSION['message'] = "Invalid Email and/or Password";
        header('location: login.php');
        exit(0);
    }
} else {
    $_SESSION['message'] = "Something went wrong!";
    header('location: login.php');
    exit(0);
}

?>