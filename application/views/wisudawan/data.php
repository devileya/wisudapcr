<?php
$this->output->set_header( "Access-Control-Allow-Origin: *" );
$this->output->set_header( "Access-Control-Allow-Credentials: true" );
$this->output->set_header( "Access-Control-Allow-Methods: POST, GET, PUT, DELETE, OPTIONS" );
$this->output->set_header( "Access-Control-Max-Age: 604800" );
$this->output->set_header( "Access-Control-Request-Headers: x-requested-with" );
$this->output->set_header( "Access-Control-Allow-Headers: x-requested-with, x-requested-by" );
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
                                <div class="row col-12 m-auto">
                                    <h3 class="col">Daftar <?= $this->uri->segment('2') ?></h3>
                                    <select class="col-3 form-control" name="angkatan" onchange="getData(this.value)">
                                        <option value="">Pilih Angkatan</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                    </select>
                                </div>
                                <h3 id="loading" >Loading....</h3>
                                <table id="wisudawan" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Nim</th>
                                        <th>Nama</th>
                                        <th>Prodi</th>
                                        <th>Email</th>
                                        <th>IPK</th>
                                        <th>Angkatan</th>
                                    </tr>
                                    </thead>
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
    $(document).ready(function(){
        $('#loading').hide();
    });

    function getData(angkatan) {
        $('#loading').show();
        $('#wisudawan').DataTable().draw().destroy();

        const url = "http://api.pcr.ac.id/siak/get_wisudawan_by_angkatan";
        var data = new FormData();
        data.append("ws_user", "JV9YEKaLGTwd");
        data.append("angkatan", angkatan);

        $.ajax({
            url: url,
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            dataType: 'JSON',
            success: function (data) {
                console.log(data);
                $('#loading').hide();
                $('#wisudawan').DataTable({
                    "data": data.data,
                    "columns": [
                        {"data": "nim"},
                        {"data": "nama"},
                        {"data": "prodi"},
                        {"data": "email_aktif"},
                        {"data": "ipk"},
                        {"data": "angkatan"}
                    ]
                });
            }
        });
    }
</script>
</body>
</html>
