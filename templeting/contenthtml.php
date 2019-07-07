<!-- header -->
<div class="header-advance-area">

    <!-- navigasi -->
    <div class="header-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-top-wraper">
                        <div class="row">
                            <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                <div class="menu-switcher-pro">
                                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">About</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                <span class="admin-name"> <?= $_SESSION['level_user']?> || Logout</span>
                                                <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                <li><a href="../web/logout.php"><span class="fa fa-power-off author-log-ic"></span>Log Out</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-tasks"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end navigasi -->

    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="index.php">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.php">INDEX</a></li>
                                    </ul>
                                </li>
                                
                                <li><a data-toggle="collapse" data-target="#demo" href="#">LAPOR <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    <ul id="demo" class="collapse dropdown-header-top">
<!--                                        <li><a href="identitas_pelapor.php">IDENTITAS PELAPOR</a></li>-->
                                        <li><a href="data_pelapor.php">DATA PELAPOR</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">KEJADIAN <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    <ul id="Tablesmob" class="collapse dropdown-header-top">
<!--                                        <li><a href="lapor_kejadian.php">LAPOR KEJADIAN</a></li>-->
                                        <li><a href="data_kejadian.php">DATA KEJADIAN</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">PETUGAS DAMKAR <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    <ul id="Tablesmob" class="collapse dropdown-header-top">
                                        <li><a href="identitas_petugas.php">IDENTITAS PETUGAS</a></li>
                                        <li><a href="data_petugas.php">DATA PETUGAS</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">POS <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    <ul id="Tablesmob" class="collapse dropdown-header-top">
                                        <li><a href="pos_damkar.php">POS DAMKAR</a></li>
                                        <li><a href="data_pos.php">DATA POS</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->
