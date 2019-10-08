<?php

?>
<!DOCTYPE html>
<html lang="en">
<!-- Begin Header -->
<head>
    <meta charset="utf-8" />
    <title>Wisuda Politeknik Caltex Riau</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href=<?= base_url("assets/images/logo_pcr1.png") ?>>

    <!-- third party css -->
    <link href=<?= base_url("assets/css/vendor/dataTables.bootstrap4.css") ?> rel="stylesheet" type="text/css" />
    <link href=<?= base_url("assets/css/vendor/responsive.bootstrap4.css") ?> rel="stylesheet" type="text/css" />
    <link href=<?= base_url("assets/css/vendor/buttons.bootstrap4.css") ?> rel="stylesheet" type="text/css" />
    <link href=<?= base_url("assets/css/vendor/select.bootstrap4.css") ?> rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href=<?= base_url("assets/css/bootstrap.min.css") ?> rel="stylesheet" type="text/css" />
    <link href=<?= base_url("assets/css/icons.min.css") ?> rel="stylesheet" type="text/css" />
    <link href=<?= base_url("assets/css/app.css") ?> rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" type="text/css" href=<?= base_url("assets/css/dropzone.min.css") ?>>
    <link rel="stylesheet" type="text/css" href=<?= base_url("assets/css/basic.min.css") ?>>


    <style type="text/css">

        .dropzone {
            margin-top: 100px;
            border: 2px dashed #0087F7;
        }

    </style>
</head>
<!-- End of Header -->
<body>
<!-- Begin page -->
<div id="wrapper">

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page" style="margin-left: 0px !important;">
        <div class="content">


            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card" style="top: 200%;">
                            <div class="card-body" style="text-align: center">
                                <h2>Terima Kasih, Pesan dan Kesan Anda Telah Kami Simpan</h2>
                            </div> <!-- end card-box -->
                        </div> <!-- end card-->
                    </div><!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end card-body-->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row -->

</div> <!-- container -->

</div> <!-- content -->

<!-- Footer Start -->
<?php $this->load->view("layout/footer") ?>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- App js -->
<?php $this->load->view("layout/js") ?>
</body>
</html>
