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
                                    <h3 class="text-muted mb-4 mt-3">Form Input Panitia</h3>
                                </div>

                                <form action="<?= site_url("Panitia/add") ?>" method="post">

                                    <div class="form-group mb-3">
                                        <label for="nama">Nama</label>
                                        <input class="form-control" name="nama" type="text" id="nama" required="">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="nim">NIM</label>
                                        <input class="form-control" name="nim" type="text" id="nim" required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="prodi">Program Studi</label>
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

                                    <div class="form-group mb-3">
                                        <label for="divisi">Divisi</label>
                                        <select name="divisi" class="form-control" required>
                                            <option>Ketua</option>
                                            <option>Bendahara</option>
                                            <option>Perlengkapan</option>
                                            <option>Dokumentasi</option>
                                            <option>Acara</option>
                                            <option>Sekretaris</option>
                                            <option>Konsumsi</option>
                                        </select>
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
