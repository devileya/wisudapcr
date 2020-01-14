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
                                    <h3 class="text-muted mb-4 mt-3">Form Input Rapat</h3>
                                </div>

                                <form action="<?= site_url("Rapat/add") ?>" method="post">

                                    <div class="form-group mb-3">
                                        <label for="nama">Judul</label>
                                        <input class="form-control" name="judul" type="text" id="judul" required="">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="nim">Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi" type="text" id="deskripsi" rows="5" required></textarea>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="nim">Tanggal</label>
                                        <input class="form-control" name="tanggal" type="date" id="tanggal" required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="nim">Kesimpulan</label>
                                        <textarea class="form-control" name="kesimpulan" rows="5" required></textarea>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Submit </button>
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
