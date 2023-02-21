<?php 
session_start();
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    $_SESSION['message'] = "You must be logged in to access the page.";
    header("Location: ../login.php");
    exit();
}
$title = "Payroll";
include('config/dbconn.php');
include('includes/header.php');


?>

<div class="container-fluid px-4">
<h1 class="mt-4">Payroll List</h1>
    <hr>
    <div class="row">

    </div>

</div>



<?php include ('includes/footer.php'); ?>