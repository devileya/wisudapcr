<?php
/**
 * Created by PhpStorm.
 * Panitia: arif_siregar
 * Date: 23/02/2019
 * Time: 1:59
 */
if (!$this->session->userdata('logined') || $this->session->userdata('logined') == false) {
    redirect();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Admin Cabana Surf and Stay</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href=<?= base_url("assets/images/favicon.ico") ?>>

    <!-- App css -->
    <link href=<?= base_url("assets/css/bootstrap.min.css") ?> rel="stylesheet" type="text/css" />
    <link href=<?= base_url("assets/css/icons.min.css") ?> rel="stylesheet" type="text/css" />
    <link href=<?= base_url("assets/css/app.css") ?> rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" type="text/css" href=<?= base_url("assets/css/dropzone.min.css") ?>>
    <link rel="stylesheet" type="text/css" href=<?= base_url("assets/css/basic.min.css") ?>>
</head>

<body class="authentication-bg">

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">

                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">
                                <span><img src=<?= base_url("assets/images/logo.png") ?> alt="" height="50"></span>
                            <p class="text-muted mb-4 mt-3">Enter your old and new password</p>
                        </div>

                        <form action="<?= site_url("Login/changePassword") ?>" method="post">

                            <div class="form-group mb-3">
                                <label for="old_password">Old Password</label>
                                <input class="form-control" name="old_password" type="password" id="old_password" required="" placeholder="Enter your old password">
                            </div>

                            <div class="form-group mb-3">
                                <label for="new password">New Password</label>
                                <input class="form-control" name="password" type="password" id="password" placeholder="Enter your new password" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="new password">Confirm Password</label>
                                <input class="form-control" name="confirm_password" type="password" id="confirm_password" placeholder="Enter confirm password" required>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"> Submit </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->
<script src=<?= base_url("assets/js/vendor.min.js") ?>></script>
<script src=<?= base_url("assets/js/app.min.js") ?>></script>
<script>
    var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
        if(password.value !== confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>

</body>
</html>
