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
    <div class="card card-body mx-5  border-3 border-success">
    
<h4 class="text-center">Employee Details</h4>
        <form method="post" action="add_employee.php">
        	<div class="row mb-3">
                <div class="col-sm-12">
                	<label for="inputCompID" class="col-sm-10 col-form-label">Company ID</label>
                    <input type="text" name="compID" class="form-control" id="inputCompID" autocomplete="off" required>
                </div>
                <div class="col-sm-12 col-md-4">
                	<label for="inputLastName" class="col-sm-10 col-form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="inputLastName" autocomplete="off" required>
                </div>
                <div class="col-sm-12 col-md-4">
                	<label for="inputFirstName" class="col-sm-10 col-form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="inputFirstName" autocomplete="off" required>
                </div>
                <div class="col-sm-12 col-md-4 ">
                	<label for="inputMiddleName" class="col-sm-10 col-form-label">Middle Name</label>
                    <input type="text" name="middle_name" class="form-control" id="inputMiddleName" autocomplete="off">
                </div>
                <div class="col-sm-12 col-md-6">
                	<label for="inputEmail" class="col-sm-10 col-form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail" autocomplete="off" required>
                </div>
                <div class="col-sm-12 col-md-6">
                	<label for="inputPosition" class="col-sm-10 col-form-label">Position</label>
                    <input type="text" name="position" class="form-control" id="inputPosition" autocomplete="off" required>
                </div>
                <div class="col-sm-12 col-md-6">
                	<label for="inputDateHired" class="col-sm-10 col-form-label">Date Hired</label>
                    <input type="date" name="date_hired" class="form-control" id="inputDateHired" autocomplete="off" required>
                </div>
                <div class="col-sm-12 col-md-6">
                	<label for="inputStatus" class="col-sm-10 col-form-label">Status</label>
                    <select class="form-select" name="status" id="status" required>
                        <option value="">- - Choose - -</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
                <div class="col text-end mt-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
                
                
            </div>
            
        </form>
    </div>
</div>






<?php
include('includes/script.php');
include('includes/footer.php');
?>