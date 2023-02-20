<?php 

$title = 'Login';
include('includes/header.php'); 

?>

<div class="login-box mt-5 py-5">
    <div class="row">
        <div class="col-2 col-sm-2 col-md-3 col-lg-4">

        </div>
        <div class="card py-5 px-5 mx-5 align-self-center center col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-5">
            <div class="card-header text-center">
                <h1>PAYROLL ADMIN LOGIN</h1>
            </div>
            <div class="card-body login-card-body my-3">
                <form action="admin/index.php" id="login-form">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" required placeholder="Email"
                            autocomplete="off">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="font-size: 1.5em; background-color: white;"><i
                                    class="fas fa-envelope"></i></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" required placeholder="Password">
                        <div class="input-group-prepend">
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
                            <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<?php include('includes/footer.php'); ?>