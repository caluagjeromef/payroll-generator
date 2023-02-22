<?php
session_start();
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    $_SESSION['message'] = "You must be logged in to access the page.";
    header("Location: ../login.php");
    exit();
}
$title = "Edit Employee Details";
include('config/dbconn.php');
include('includes/header.php');
?>

<div class="container">
    <div class="card card-body mx-5  border-3 border-success">
    
<h4 class="text-center">Employee Details</h4>

		<?php 
		  if (isset($_GET['id'])) {
		      $emp_id = $_GET['id'];
		      $status = array('','Active','Inactive',);
		      $employees = "SELECT * FROM tblemployee WHERE id='$emp_id'";
		      $employee_row = mysqli_query($conn, $employees);
		      
		      if (mysqli_num_rows($employee_row) > 0) {
		          foreach ($employee_row as $employee){
		          ?>    
		            
		          
        <form method="post" action="crud.php">
        <input type="hidden" name="emp_id" value="<?=$employee['id']?>">
        	<div class="row mb-3">
                <div class="col-sm-12">
                	<label for="inputCompID" class="col-sm-10 col-form-label">Company ID</label>
                    <input type="text" name="compID" class="form-control" id="inputCompID" value="<?=$employee['compID']?>" autocomplete="off" required>
                </div>
                <div class="col-sm-12 col-md-4">
                	<label for="inputLastName" class="col-sm-10 col-form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="inputLastName" value="<?=$employee['lastname']?>" autocomplete="off" required>
                </div>
                <div class="col-sm-12 col-md-4">
                	<label for="inputFirstName" class="col-sm-10 col-form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="inputFirstName" value="<?=$employee['firstname']?>" autocomplete="off" required>
                </div>
                <div class="col-sm-12 col-md-4 ">
                	<label for="inputMiddleName" class="col-sm-10 col-form-label">Middle Name</label>
                    <input type="text" name="middle_name" class="form-control" id="inputMiddleName" value="<?=$employee['midname']?>" autocomplete="off">
                </div>
                <div class="col-sm-12 col-md-6">
                	<label for="inputEmail" class="col-sm-10 col-form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail" value="<?=$employee['email']?>" autocomplete="off" required>
                </div>
                <div class="col-sm-12 col-md-6">
                	<label for="inputPosition" class="col-sm-10 col-form-label">Position</label>
                    <input type="text" name="position" class="form-control" id="inputPosition" value="<?=$employee['position']?>" autocomplete="off" required>
                </div>
                <div class="col-sm-12 col-md-6">
                	<label for="inputDateHired" class="col-sm-10 col-form-label">Date Hired</label>
                    <input type="date" name="date_hired" class="form-control" id="inputDateHired" value="<?=$employee['date_hired']?>" autocomplete="off" required>
                </div>
                <div class="col-sm-12 col-md-6">
                	<label for="inputStatus" class="col-sm-10 col-form-label">Status</label>
                    <select class="form-select" name="status" id="status" required>
                        <option value="">- - Choose - -</option>
                        <option value="1" <?= $employee['status'] == 1 ? 'selected' : '' ?>>Active</option>
                        <option value="2" <?= $employee['status'] == 2 ? 'selected' : '' ?>>Inactive</option>
                    </select>
                </div>
                <div class="col text-end mt-3">
                    <button type="submit" name="update_employee" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
        <?php     
		          }
		      }else{
		          ?>
		          
		          <?php
		      }
		  }  
		?>
    </div>
</div>






<?php
include('includes/script.php');
include('includes/footer.php');
?>