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
                                    <h3 class="text-muted mb-4 mt-3">Pesan & Kesan Terbaik</h3>
                                </div>
                                <table id="example3" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Pesan</th>
                                        <th>Kesan</th>
                                        <th>Prodi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no=1;
                                    foreach($data as $item){ ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?= $item->nama ?></a></td>
                                            <td><?= $item->nim ?></td>
                                            <td><?= $item->pesan ?></td>
                                            <td><?= $item->kesan ?></td>
                                            <td><?= $item->prodi ?></td>
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
