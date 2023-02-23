<?php
session_start();
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    $_SESSION['message'] = "You must be logged in to access the page.";
    header("Location: ../login.php");
    exit();
}
$title = "Add New Payroll";
include('config/dbconn.php');
include('includes/header.php');
?>
<h1><?php include('../message.php'); ?></h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="upload">
  <input type="submit">
</form>






<?php 
include('includes/script.php');
include('includes/footer.php');
?>