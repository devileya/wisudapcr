<?php
/**
 * Created by PhpStorm.
 * Panitia: arif_siregar
 * Date: 23/02/2019
 * Time: 1:59
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Wisuda Politeknik Caltex Riau</title>
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
                                <span><img src=<?= base_url("assets/images/logo_pcr.png") ?> alt="" height="50"></span>
                            <p class="text-muted mb-4 mt-3">Masukkan username dan password anda</p>
                        </div>

                        <form action="#" method="post">

                            <div class="form-group mb-3">
                                <label for="emailaddress">Username</label>
                                <input class="form-control" name="name" type="text" id="name" required="" placeholder="Enter your username">
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" name="password" type="password" required="" id="password" placeholder="Enter your password">
                            </div>

                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                    <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"> Log In </button>
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

</body>
</html>
