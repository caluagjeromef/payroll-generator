<?php
session_start();
$title = 'Login';
include('includes/header.php');
include('admin/config/dbconn.php');
?>

<div class="login-box mt-5 py-5">
    <div class="row justify-content-center">

        <div class="card py-5 px-5 mx-5 align-self-center center col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-5">
            <div class="card-header text-center">
                <h1>PAYROLL ADMIN LOGIN</h1>
            </div>
            <div class="card-body login-card-body my-3">
                <form action="Vlogin.php" method="POST">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" name="email" placeholder="Email"
                            autocomplete="off" required>
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="font-size: 1.5em; background-color: white;"><i
                                    class="fas fa-envelope"></i></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" name="password"
                            placeholder="Password">
                        <div class="input-group-prepend" required>
                            <span class="input-group-text" style="font-size: 1.5em; background-color: white;"><i
                                    class="fas fa-lock"></i></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="d-flex mt-2">
                                <input class="" type="checkbox" id="remember">
                                <label for="remember" role="button" class="ps-1"><b>Remember Me</b></label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" name="login_btn" class="btn btn-primary btn-block">LOGIN</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-1">
                            <?php include('message.php'); ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<?php include('includes/footer.php'); ?>