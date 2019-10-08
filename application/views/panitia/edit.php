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
                                    <h3 class="text-muted mb-4 mt-3">Edit Data Panitia</h3>
                                </div>

                                <form action="<?= site_url("Panitia/update/".$this->uri->segment('3')) ?>" method="post">

                                    <div class="form-group mb-3">
                                        <label for="nama">Nama</label>
                                        <input class="form-control" name="nama" type="text" id="nama" required value="<?= $data->nama ?>">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="nim">NIM</label>
                                        <input class="form-control" name="nim" type="text" id="nim" required value="<?= $data->nim ?>">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="prodi">Program Studi</label>
                                        <select name="prodi" class="form-control" required>
                                            <option <?= $data->prodi == "Sistem Informasi (D4)" ? "selected" : "" ?>>Sistem Informasi (D4)</option>
                                            <option <?= $data->prodi == "Teknik Informatika (D4)" ? "selected" : "" ?>>Teknik Informatika (D4)</option>
                                            <option <?= $data->prodi == "Teknik Elektronika Telekomunikasi (D4)" ? "selected" : "" ?>>Teknik Elektronika Telekomunikasi (D4)</option>
                                            <option <?= $data->prodi == "Teknik Mesin (D4)" ? "selected" : "" ?>>Teknik Mesin (D4)</option>
                                            <option <?= $data->prodi == "Teknik Listrik (D4)" ? "selected" : "" ?>>Teknik Listrik (D4)</option>
                                            <option <?= $data->prodi == "Teknik Komputer (D3)" ? "selected" : "" ?>>Teknik Komputer (D3)</option>
                                            <option <?= $data->prodi == "Teknik Elektronika (D3)" ? "selected" : "" ?>>Teknik Elektronika (D3)</option>
                                            <option <?= $data->prodi == "Teknik Mekatronika (D3)" ? "selected" : "" ?>>Teknik Mekatronika (D3)</option>
                                            <option <?= $data->prodi == "Teknik Telekomunikasi (D3)" ? "selected" : "" ?>>Teknik Telekomunikasi (D3)</option>
                                            <option <?= $data->prodi == "Akuntansi (D3)" ? "selected" : "" ?>>Akuntansi (D3)</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="divisi">Divisi</label>
                                        <select name="divisi" class="form-control" required>
                                            <option <?= $data->divisi == "Ketua" ? "selected" : "" ?>>Ketua</option>
                                            <option <?= $data->divisi == "Bendahara" ? "selected" : "" ?>>Bendahara</option>
                                            <option <?= $data->divisi == "Perlengkapan" ? "selected" : "" ?>>Perlengkapan</option>
                                            <option <?= $data->divisi == "Dokumentasi" ? "selected" : "" ?>>Dokumentasi</option>
                                            <option <?= $data->divisi == "Acara" ? "selected" : "" ?>>Acara</option>
                                            <option <?= $data->divisi == "Sekretaris" ? "selected" : "" ?>>Sekretaris</option>
                                            <option <?= $data->divisi == "Konsumsi" ? "selected" : "" ?>>Konsumsi</option>
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
