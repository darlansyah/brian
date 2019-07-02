<?php
session_start();
require './kumpulan_fungsi.php';
authentication();
$kon = koneksi_db();
$query = mysqli_query($kon, "SELECT * FROM `masyarakat_pelapor");
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../Tugas_Akhir/assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../Tugas_Akhir/assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Aplikasi Pemadam Kebakaran
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="assets/font-awesome/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <!-- CSS Files -->
        <link href="../Tugas_Akhir/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../Tugas_Akhir/assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="../Tugas_Akhir/assets/demo/demo.css" rel="stylesheet" />
    </head>

    <body class="">
        <div class="wrapper">
            <div class="sidebar" data-color="white" data-active-color="danger">
                <!--
                  Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
                -->
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                        <div class="logo-image-small">
                            <img src="../Tugas_Akhir/assets/img/logo-small.png">
                        </div>
                    </a>
                    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                        Brian Chandra AB
                        <!-- <div class="logo-image-big">
                        <img src="../assets/img/logo-big.png">
                        </div> -->
                    </a>
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="active ">
                            <a href="./home.php">
                                <i class="nc-icon nc-bank"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li>
                            <a href="./lapor.php">
                                <i class="nc-icon nc-tap-01"></i>
                                <p>Lapor</p>
                            </a>
                        </li>
                        <li>
                            <a href="./map.html">
                                <i class="nc-icon nc-pin-3"></i>
                                <p>Maps</p>
                            </a>
                        </li>
                        <li>
                            <a href="./kejadian.php">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>Pemberitahuan</p>
                            </a>
                        </li>
                        <li>
                            <a href="./masyarakat_pelapor.php">
                                <i class="nc-icon nc-badge"></i>
                                <p>Data Pelaporan</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main-panel">

                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <div class="navbar-toggle">
                                <button type="button" class="navbar-toggler">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </button>
                            </div>
                            <a class="navbar-brand" href="#pablo">Tabel Masyarakat Pelapor</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link btn-rotate" href="logout.php">
                                        <i class="nc-icon nc-button-power"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->

                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">

                                    <?php flash('masyarakat_pelapor'); ?>
                                    <div class="col-md-2">
                                        <a href="masyarakat_pelapor_tambah.php" class="btn btn-success btn-block">Tambah Data</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>No KTP</th>
                                            <th>Telp</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                while ($result = mysqli_fetch_object($query)) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?php echo $result->nama_masyarakat_pelapor ?></td>
                                                        <td><?php echo $result->no_ktp ?></td>
                                                        <td><?php echo $result->telp ?></td>
                                                        <td><?php echo $result->alamat ?></td>
                                                        <td>
                                                            <a href="masyarakat_pelapor_ubah.php?id=<?= $result->id_masyarakat_pelapor; ?>"
                                                               class="btn btn-outline-primary btn-sm mg-r-5"><div><i class="fa fa-pencil"></i></div></a>
                                                            <a href="masyarakat_pelapor_hapus.php?id=<?= $result->id_masyarakat_pelapor; ?>"
                                                               onclick="return confirm('Anda yakin akan menghapus <?php echo $result->nama_masyarakat_pelapor ?>?')"
                                                               class="btn btn-outline-danger btn-sm mg-r-5"><div><i class="fa fa-trash-o"></i></div></a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="../Tugas_Akhir/assets/js/core/jquery.min.js"></script>
        <script src="../Tugas_Akhir/assets/js/core/popper.min.js"></script>
        <script src="../Tugas_Akhir/assets/js/core/bootstrap.min.js"></script>
        <script src="../Tugas_Akhir/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chart JS -->
        <script src="../Tugas_Akhir/assets/js/plugins/chartjs.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="../Tugas_Akhir/assets/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../Tugas_Akhir/assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
        <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
        <script src="../Tugas_Akhir/assets/demo/demo.js"></script>
    </body>
</html>