<div class="navbar-custom">
                <ul class="list-unstyled topbar-right-menu float-right mb-0">
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <medium class="pro-user-name ml-1" style="color: #208765;">
                                <?= $this->session->userdata("name") ?>
                            </medium>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">

                            <!-- item-->
                            <a href="<?= site_url("Login/change_password") ?>" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Change Password</span>
                            </a>

                            <!-- item-->
                            <a href="<?= site_url("Login/logout") ?>" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Log Out</span>
                            </a>
                        </div>
                    </li>

                </ul>
                <button class="button-menu-mobile open-left disable-btn">
                    <i class="fe-menu"></i>
                </button>
            </div>