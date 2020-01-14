<div class="left-side-menu">

        <div class="slimscroll-menu">

            <!-- LOGO -->
            <a href=<?= site_url() ?> class="logo text-center mb-4">
                        <span class="logo-lg">
                            <img src=<?= base_url("assets/images/logo_pcr.png") ?> alt="" height="50" width="200">
                        </span>
                <span class="logo-sm">
                            <img src=<?= base_url("assets/images/logo_pcr1.png") ?> alt="" height="24">
                        </span>
            </a>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <li>
                        <a class="fe-award" href="<?= site_url("Dashboard") ?>">  Pesan Kesan Terbaik</a>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-layers"></i>
                            <span> Kesan Pesan (Prodi) </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?= site_url("Prodi/lists/0") ?>">Sistem Informasi (D4)</a>
                            </li>
                            <li>
                                <a href="<?= site_url("Prodi/lists/1") ?>">Teknik Informatika (D4)</a>
                            </li>
                            <li>
                                <a href="<?= site_url("Prodi/lists/2") ?>">Teknik Elektronika Telekomunikasi (D4)</a>
                            </li>
                            <li>
                                <a href="<?= site_url("Prodi/lists/3") ?>">Teknik Mesin (D4)</a>
                            </li>
                            <li>
                                <a href="<?= site_url("Prodi/lists/4") ?>">Teknik Listrik (D4)</a>
                            </li>
                            <li>
                                <a href="<?= site_url("Prodi/lists/5") ?>">Teknik Komputer (D3)</a>
                            </li>
                            <li>
                                <a href="<?= site_url("Prodi/lists/6") ?>">Teknik Elektronika (D3)</a>
                            </li>
                            <li>
                                <a href="<?= site_url("Prodi/lists/7") ?>">Teknik Telekomunikasi (D3)</a>
                            </li>
                            <li>
                                <a href="<?= site_url("Prodi/lists/8") ?>">Teknik Mekatronika (D3)</a>
                            </li>
                            <li>
                                <a href="<?= site_url("Prodi/lists/9") ?>">Akuntansi (D3)</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-home"></i>
                            <span> Divisi </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?= site_url("Panitia/lists/ketua") ?>">Ketua</a>
                            </li>
                            <li>
                                <a href="<?= site_url("Panitia/lists/bendahara") ?>">Bendahara</a>
                            </li>
                            <li>
                                <a href="<?= site_url("Panitia/lists/perlengkapan") ?>">Perlengkapan</a>
                            </li>
                            <li>
                                <a href="<?= site_url("Panitia/lists/dokumentasi") ?>">Dokumentasi</a>
                            </li>
                            <li>
                                <a href="<?= site_url("Panitia/lists/acara") ?>">Acara</a>
                            </li>
                            <li>
                                <a href="<?= site_url("Panitia/lists/sekretaris") ?>">Sekretaris</a>
                            </li>
                            <li>
                                <a href="<?= site_url("Panitia/lists/konsumsi") ?>">Konsumsi</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-briefcase"></i>
                            <span> Kegiatan Rapat </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?= site_url("Rapat/lists") ?>">Data Rapat</a>
                            </li>
                            <li>
                                <a href="<?= site_url("Rapat") ?>">Tambah Rapat</a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>