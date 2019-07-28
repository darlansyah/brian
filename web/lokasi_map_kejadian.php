<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Aplikasi Pemadam Kebakaran</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts
        ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="../css/owl.carousel.css">
        <link rel="stylesheet" href="../css/owl.theme.css">
        <link rel="stylesheet" href="../css/owl.transitions.css">
        <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="../css/animate.css">
        <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="../css/normalize.css">
        <!-- meanmenu icon CSS
        ============================================ -->
        <link rel="stylesheet" href="../css/meanmenu.min.css">
        <!-- main CSS
        ============================================ -->
        <link rel="stylesheet" href="../css/main.css">
        <!-- morrisjs CSS
        ============================================ -->
        <link rel="stylesheet" href="../css/morrisjs/morris.css">
        <!-- mCustomScrollbar CSS
        ============================================ -->
        <link rel="stylesheet" href="../css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- metisMenu CSS
        ============================================ -->
        <link rel="stylesheet" href="../css/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="../css/metisMenu/metisMenu-vertical.css">
        <!-- calendar CSS
        ============================================ -->
        <link rel="stylesheet" href="../css/calendar/fullcalendar.min.css">
        <link rel="stylesheet" href="../css/calendar/fullcalendar.print.min.css">
        <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="../style.css">
        <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="../css/responsive.css">
        <!-- modernizr JS
        ============================================ -->
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!-- cek apa udah login ? -->
        <script>
            if (!(localStorage.getItem('sudah_login') == 1)) {
                window.location.href = 'login.php';
            }
        </script>
        <!-- end cek apa udah login ? -->

        <!-- sidebar -->
        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="index.php"><img class="main-logo" src="../img/logo/logo.png" alt="" /></a>
                    <strong><img src="../img/logo/logosn.png" alt="" /></strong>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                            <li class="#">
                                <a class="has-arrow" href="index.php">
                                    <i class="fa big-icon fa-bullseye icon-wrap"></i>
                                    <span class="mini-click-non">Lapor</span>
                                </a>
                                <!--                        <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Identitas Pelapor" href="identitas_pelapor.php"><i class="fa fa-user sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Identitas Pelapor</span></a></li>
                              </ul>-->
                                <ul class="submenu-angle" aria-expanded="true">
                                    <li><a title="Data Pelapor" href="data_pelapor.php"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Data Pelapor</span></a></li>
                                </ul>
                            </li>
                            <li class="#">
                                <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-fire-extinguisher icon-wrap"></i> <span class="mini-click-non">Kejadian</span></a>
<!--                                <ul class="submenu-angle" aria-expanded="true">
                                    <li><a title="Lapor Kejadian" href="lapor_kejadian.php"><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Lapor Kejadian</span></a></li>
                                </ul>-->
                                <ul class="submenu-angle" aria-expanded="true">
                                    <li><a title="Data Kejadian" href="data_kejadian.php"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Data Kejadian</span></a></li>
                                </ul>
                            </li>
                            <li class="#">
                                <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-users icon-wrap"></i> <span class="mini-click-non">Petugas Damkar</span></a>
                                <!--                                <ul class="submenu-angle" aria-expanded="true">
                                                                    <li><a title="Identitas Petugas" href="identitas_petugas.php"><i class="fa fa-user sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Identitas Petugas</span></a></li>
                                                                </ul>-->
                                <ul class="submenu-angle" aria-expanded="true">
                                    <li><a title="Data Petugas" href="data_petugas.php"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Data Petugas</span></a></li>
                                </ul>
                            </li>
                            <li class="#">
                                <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-home icon-wrap"></i> <span class="mini-click-non">POS</span></a>
                                <!--                                <ul class="submenu-angle" aria-expanded="true">
                                                                    <li><a title="Pos Damkar" href="pos_damkar.php"><i class="fa fa-home sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Pos Damkar</span></a></li>
                                                                </ul>-->
                                <ul class="submenu-angle" aria-expanded="true">
                                    <li><a title="Data Pos" href="data_pos.php"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Data Pos</span></a></li>
                                </ul>
                            </li>
                            <li><a title="Landing Page" href="#" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Landing Page</span></a></li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
        <!-- end sidebar -->

        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-advance-area">
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
                                                        <a href="logout.php" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                            <span class="admin-name">Akun</span>
                                                            <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                        </a>
                                                        <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn" style="margin-top: 60px;width: 100%;">
                                                            <li><a href="pelapor_ubah.php"><span class="fa fa-lock author-log-ic"></span>Profile</a>
                                                            </li>
                                                            <li><a href="logout.php"><span class="fa fa-lock author-log-ic"></span>Log Out</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-tasks"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul class="mobile-menu-nav">
                                            <li><a data-toggle="collapse" data-target="#Charts" href="index.php">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            </li>

                                            <li><a data-toggle="collapse" data-target="#demo" href="data_pelapor.php"> DATA LAPOR <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                                <!--                                                <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="identitas_pelapor.php">IDENTITAS PELAPOR</a></li>
                                                <li><a href="data_pelapor.php">DATA PELAPOR</a></li>
                                              </ul>-->
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Tablesmob" href="data_kejadian.php">DATA KEJADIAN <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                                <!--                                                <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="lapor_kejadian.php">LAPOR KEJADIAN</a></li>
                                                <li><a href="data_kejadian.php">DATA KEJADIAN</a></li>
                                              </ul>-->
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Tablesmob" href="data_petugas.php">DATA PETUGAS<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                                <!--                                                <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="identitas_petugas.php">IDENTITAS PETUGAS</a></li>
                                                <li><a href="data_petugas.php">DATA PETUGAS</a></li>
                                              </ul>-->
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Tablesmob" href="data_pos.php">DATA POS <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                                <!--                                                <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="pos_damkar.php">POS DAMKAR</a></li>
                                                <li><a href="data_pos.php">DATA POS</a></li>
                                              </ul>-->
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Tablesmob" href="logout.php">Logout <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                                <!--                                                <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="pos_damkar.php">POS DAMKAR</a></li>
                                                <li><a href="data_pos.php">DATA POS</a></li>
                                              </ul>-->
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
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sub main -->

            <div class="google-maps-area mg-t-15 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="sparkline9-list">
                                <div class="sparkline9-hd">
                                    <div class="main-sparkline9-hd">
                                        <center><h1>Google Map <span class="table-project-n"></span></h1></center>
                                    </div>
                                </div>
                                <div class="sparkline9-graph">
                                    <div class="google-map-single">
                                        <div id="map1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <form action="../app/data_kejadian.php" method="post">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                    <div class="review-content-section">
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control data-input" name="longitude" placeholder="Longitude">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-sticky-note" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control data-input" name="deskripsi_kejadian" placeholder="Deskripsi Kejadian">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="review-content-section">
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control data-input" name="latitude" placeholder="Latitude">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-camera" aria-hidden="true"></i></span>
                                                            <input type="file" class="form-control data-input" name="gambar" placeholder="Upload Gambar">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                        <button type="submit" id="btnSubmit" class="btn btn-primary waves-effect waves-light m-r-10">Simpan
                                                        </button>
                                                        <input type="reset" class="btn btn-primary waves-effect waves-light m-r-10" value="Batal">
                                                        <!--<a href="data_kejadian.php" class="btn btn-primary waves-effect waves-light m-r-10">Batal </a>-->

                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer -->
            <div class="footer-copyright-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-copy-right">
                                <p>Aplikasi Pemadam Kebakaran Kabupaten Bekasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end footer -->

            <!-- jquery
            ============================================ -->
            <script src="../js/vendor/jquery-1.11.3.min.js"></script>
            <!-- bootstrap JS
            ============================================ -->
            <script src="../js/bootstrap.min.js"></script>
            <!-- wow JS
            ============================================ -->
            <script src="../js/wow.min.js"></script>
            <!-- price-slider JS
            ============================================ -->
            <script src="../js/jquery-price-slider.js"></script>
            <!-- meanmenu JS
            ============================================ -->
            <script src="../js/jquery.meanmenu.js"></script>
            <!-- owl.carousel JS
            ============================================ -->
            <script src="../js/owl.carousel.min.js"></script>
            <!-- sticky JS
            ============================================ -->
            <script src="../js/jquery.sticky.js"></script>
            <!-- scrollUp JS
            ============================================ -->
            <script src="../js/jquery.scrollUp.min.js"></script>
            <!-- mCustomScrollbar JS
            ============================================ -->
            <script src="../js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="../js/scrollbar/mCustomScrollbar-active.js"></script>
            <!-- metisMenu JS
            ============================================ -->
            <script src="../js/metisMenu/metisMenu.min.js"></script>
            <script src="../js/metisMenu/metisMenu-active.js"></script>
            <!-- morrisjs JS
            ============================================ -->
            <!--            <script src="../js/morrisjs/raphael-min.js"></script>
                        <script src="../js/morrisjs/morris.js"></script>
                        <script src="../js/morrisjs/morris-active.js"></script>-->
            <!-- morrisjs JS
            ============================================ -->
            <script src="../js/sparkline/jquery.sparkline.min.js"></script>
            <script src="../js/sparkline/jquery.charts-sparkline.js"></script>
            <!-- calendar JS
            ============================================ -->
            <script src="../js/calendar/moment.min.js"></script>
            <script src="../js/calendar/fullcalendar.min.js"></script>
            <script src="../js/calendar/fullcalendar-active.js"></script>
            <!-- plugins JS
            ============================================ -->
            <script src="../js/plugins.js"></script>

            <!-- Google map JS
            ============================================ -->
            <!--<script src="../js/google.maps/google.maps-active.js"></script>-->
            <script>
            function initMap() {
// The location of Uluru
                var uluru = {lat: -7.782804, lng: 110.373020};
// The map, centered at Uluru
                var map = new google.maps.Map(
                        document.getElementById('map1'), {zoom: 15, center: uluru});
// The marker, positioned at Uluru
                var marker = new google.maps.Marker({position: uluru, map: map});
                console.log('The map is set');
            }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXMNHIbmIKC4y_QUQpQdyhcTiDIKuCx4U&callback=initMap"></script>


            <!-- main JS
            ============================================ -->
            <script src="../js/main.js"></script>
            <script>
            $(document).ready(function () {
                // Btn submit click event
                $('#btnSubmit').click(function (e) {
//                        e.preventDefault();
                    var objInputData = $('.data-input');

                    for (var x = 0; x < objInputData.length; x++) {
                        if (objInputData[x].value == '') {
                            e.preventDefault();
                            alert('Form data belum lengkap');
                            return;
                        }
                    }
                    // Ambil semua nilai dari form tersebut
                    var longitude = objInputData[0].value;
                    var latitude = objInputData[2].value;
                    var deskripsi = objInputData[1].value;
                    var gambar = objInputData[3].value;
                    var id_profil = window.localStorage.getItem('id_profile');

                    $.ajax({
                        url: 'http://localhost/brian/web/ajax-proses-pelaporan.php',
                        type: 'POST',
                        contentType: 'application/x-www-form-urlencoded',
                        dataType: 'json',
                        data: {
                            'longitude': longitude,
                            'latitude': latitude,
                            'deskripsi': deskripsi,
                            'gambar': gambar,
                            'id_profile': id_profil
                        },
                        success: function (response) {
                            console.log('ok');
                            console.log(response);
                        }
                    });
                });

                document.addEventListener('click', function (e) {
                    console.log(e.target.classList);
                });
            });
            </script>

    </body>
</html>
