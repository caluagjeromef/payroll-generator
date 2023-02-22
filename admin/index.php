<?php 
session_start();
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    $_SESSION['message'] = "You must be logged in to access the page.";
    header("Location: ../login.php");
    exit();
}
$title = "Dashboard";
include('config/dbconn.php');
include('includes/header.php'); 


?>

<?php include('../message.php'); ?>

    
    <div class="row">
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="card p-2 mb-3 border-3 border-success">
                <div class="card-body" style="font-size: 1.5em;">
                    <span class="info-box-icon bg-gradient-dark elevation-1"><i class="fas fa-building"></i></span>
                    <span class="info-box-text">Total Employees</span><br>
                    <span class="info-box-number ps-4">
                        <?php 
                        $total_emp = "SELECT COUNT(id) as total_emp FROM tblemployee";
                        $result = mysqli_query($conn, $total_emp);
                        
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $total_emp = $row['total_emp'];
                            echo $total_emp;
                        }else {
                            echo "Error: " . mysqli_error($conn);
                        }
                        ?>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="card p-2 mb-3 border-3 border-success">
                <div class="card-body" style="font-size: 1.5em;">
                    <span class="info-box-icon bg-gradient-dark elevation-1"><i class="fas fa-cash-register"></i></span>
                    <span class="info-box-text">Total Payrolls</span><br>
                    <span class="info-box-number ps-4">
                        &nbsp;#
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8">
            <img src="assets\img\img.jpg" alt="">
        </div>
    </div>
</div>



<?php
include('includes/footer.php');
include('includes/script.php');
?>