<?php
session_start();
$_SESSION['auth'] = false;

session_destroy();
foreach ($_SESSION as $key => $value) {
    unset($_SESSION[$key]);
}

header("location:login.php");
exit();
?>