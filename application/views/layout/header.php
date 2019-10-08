<?php if (!$this->session->userdata('logined') || $this->session->userdata('logined') == false) {
    redirect();
} ?>

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