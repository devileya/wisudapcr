<?php
?>
<!DOCTYPE html>
<html lang="en">
<!-- Begin Header -->
<?php $this->load->view("layout/header") ?>
<!-- End of Header -->
<body>
<!-- Begin page -->
<div id="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    <?php $this->load->view("layout/sidebarmenu") ?>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Topbar Start -->
            <?php $this->load->view("layout/topbar") ?>
            <!-- end Topbar -->

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Wisuda PCR</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center w-75 m-auto">
                                    <h3 class="text-muted mb-4 mt-3">Daftar <?= $this->uri->segment('3') ?></h3>
                                </div>
                                <div class="float-sm-right col-md-2">
                                    <a href="<?php echo base_url() ?>kegiatan" class="btn btn-block btn-success btn-flat"><i class="fa fa-plus"></i> Tambah Kegiatan</a>
                                </div>
                                <table id="example3" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>Divisi</th>
                                        <th>Kegiatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no=1;
                                    foreach($data as $item){ ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?= date("d-m-Y", strtotime($item->tanggal)) ?></a></td>
                                            <td><?= $item->nama ?></td>
                                            <td><?= $item->divisi ?></td>
                                            <td><?= $item->kegiatan ?></td>
                                            <td>
                                                <div class="margin">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-danger btn-flat">Aksi</button>
                                                        <button type="button" class="btn btn-danger btn-flat dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu" role="menu">
                                                            <a class="dropdown-item" href="<?php echo base_url() ?>kegiatan/edit/<?php echo $item->id ?>">Ubah</a>
                                                            <a class="dropdown-item" href="<?php echo base_url() ?>kegiatan/delete/<?php echo $item->id ?>">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                            </div>
                            </td>
                                        </tr>
                                    <?php } ?>

                                    </tbody>
                                </table>
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
<script type="text/javascript">
    $(function()
    {
        $('#btnSubmit').on('click',function()
        {
            $(this).val('Please wait ...')
                .attr('disabled','disabled');
            $('#formHome').submit();
        });

    });


    (function () {
        /**
         * Video element
         * @type {HTMLElement}
         */
        var video = document.getElementById("my-video");

        /**
         * Check if video can play, and play it
         */
        video.addEventListener("canplay", function () {
            video.play();
        });
    })();
</script>
</body>
</html>
