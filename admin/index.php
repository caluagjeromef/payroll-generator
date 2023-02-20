<?php 
$title = "Dashboard";
include('includes/header.php'); ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <hr>
    <div class="row">

    </div>
    <div class="row">

    </div>
    <div class="row">
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="card p-2 mb-3">
                <div class="card-body" style="font-size: 1.5em;">
                    <span class="info-box-icon bg-gradient-dark elevation-1"><i class="fas fa-building"></i></span>
                    <span class="info-box-text">Total Employees</span><br>
                    <span class="info-box-number ps-4">
                        6
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="card p-2 mb-3">
                <div class="card-body" style="font-size: 1.5em;">
                    <span class="info-box-icon bg-gradient-dark elevation-1"><i class="fas fa-cash-register"></i></span>
                    <span class="info-box-text">Total Payrolls</span><br>
                    <span class="info-box-number ps-4">
                        &nbsp;6
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



<?php;
include('includes/footer.php');
include('includes/script.php');
?>