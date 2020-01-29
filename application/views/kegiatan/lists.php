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
                                <table id="data_kegiatan" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>Divisi</th>
                                        <th>Kegiatan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
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
        $('#data_kegiatan').DataTable().draw().destroy();

        const url = "<?= base_url("Kegiatan/data") ?>";

        $.ajax({
            url: url,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            dataType: 'JSON',
            success: function (data) {
                console.log(data);
                $('#data_kegiatan').DataTable({
                    "data": data.data,
                    "columns": [
                        {"data": "tanggal"},
                        {"data": "nama"},
                        {"data": "divisi"},
                        {"data": "kegiatan"},
                        {"data": "status"},
                        {"render": function (data, type, row) {
                            var html = '<div class="margin">';
                            html += '<div class="btn-group">';
                            html += '<button type="button" class="btn btn-danger btn-flat">Aksi</button>';
                            html += '<button type="button" class="btn btn-danger btn-flat dropdown-toggle" data-toggle="dropdown">';
                            html += '<span class="caret"></span>';
                            html += '<span class="sr-only">Toggle Dropdown</span>';
                            html += '</button>';
                            html += '<div class="dropdown-menu" role="menu">';
                            html += '<a class="dropdown-item" href="<?php echo base_url() ?>kegiatan/edit/'+row.id+'">Ubah</a>';
                            html += '<a class="dropdown-item" href="<?php echo base_url() ?>kegiatan/delete/'+row.id+'">Hapus</a>';
                            html += '</div></div></div>';


                        return html;
                        } }
                    ]
                });
            }
        });
    });
</script>
</body>
</html>
