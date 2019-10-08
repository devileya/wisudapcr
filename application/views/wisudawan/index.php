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
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Form Wisudawan Politeknik Caltex Riau</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form id="formWisudawan" action="<?= site_url('Wisudawan/add') ?>" class="form-horizontal" method="post">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">NIM</label>
                                        <div class="col-sm-10">
                                            <input name="nim" type="text" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Program Studi</label>
                                        <div class="col-sm-10">
                                            <select name="prodi" class="form-control" required>
                                                <option>Sistem Informasi (D4)</option>
                                                <option>Teknik Informatika (D4)</option>
                                                <option>Teknik Elektronika Telekomunikasi (D4)</option>
                                                <option>Teknik Mesin (D4)</option>
                                                <option>Teknik Listrik (D4)</option>
                                                <option>Teknik Komputer (D3)</option>
                                                <option>Teknik Elektronika (D3)</option>
                                                <option>Teknik Mekatronika (D3)</option>
                                                <option>Teknik Telekomunikasi (D3)</option>
                                                <option>Akuntansi (D3)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                            <input type="submit" value="Submit" class="form-control btn btn-success" id="btnSubmit"/>
                                        </div>
                                    </div>
                                </form>

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
