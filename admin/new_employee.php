<?php
session_start();
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    $_SESSION['message'] = "You must be logged in to access the page.";
    header("Location: ../login.php");
    exit();
}
$title = "Add New Employee";
include('config/dbconn.php');
include('includes/header.php');
?>

<div class="container">
<?php include('../message.php'); ?>
    <div class="card card-body mx-5">
    
<h4 class="text-center">Employee Details</h4>
        <form method="post" action="add_employee.php">
        	<div class="row mb-3">
                <label for="inputCompID" class="col-sm-2 col-form-label">Company ID</label>
                <div class="col-sm-10">
                    <input type="text" name="compID" class="form-control" id="inputCompID" autocomplete="off" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputLastName" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" name="last_name" class="form-control" id="inputLastName" autocomplete="off" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputFirstName" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" name="first_name" class="form-control" id="inputFirstName" autocomplete="off" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputMiddleName" class="col-sm-2 col-form-label">Middle Name</label>
                <div class="col-sm-10">
                    <input type="text" name="middle_name" class="form-control" id="inputMiddleName" autocomplete="off">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail" autocomplete="off" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPosition" class="col-sm-2 col-form-label">Position</label>
                <div class="col-sm-10">
                    <input type="text" name="position" class="form-control" id="inputPosition" autocomplete="off" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputDateHired" class="col-sm-2 col-form-label">Date Hired</label>
                <div class="col-sm-10">
                    <input type="date" name="date_hired" class="form-control" id="inputDateHired" autocomplete="off" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select class="form-select" name="status" id="status" required>
                        <option value="">Choose...</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col text-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>






<?php
include('includes/script.php');
include('includes/footer.php');
?>