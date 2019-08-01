<?php
session_start();
include '../functions/kumpulan_fungsi.php';
authentication();
//
$kon = koneksi_db();
$query = mysqli_query($kon, "SELECT masyarakat_pelapor.telp, masyarakat_pelapor.nama_masyarakat_pelapor as nama_masyarakat,kejadian.* FROM masyarakat_pelapor INNER JOIN kejadian ON masyarakat_pelapor.id_masyarakat_pelapor = kejadian.id_masyarakat_pelapor order by tanggal_waktu_kejadian desc limit 10");

// admin & petugas
$res_admin = mysqli_query($kon, "SELECT * FROM user");
$num_admin = mysqli_num_rows($res_admin);

// total kejadian
$res_kejadian = mysqli_query($kon, "SELECT * FROM kejadian");
$num_kejadian = mysqli_num_rows($res_kejadian);

// total petugas
$res_petugas = mysqli_query($kon, "SELECT * FROM petugas");
$num_petugas = mysqli_num_rows($res_petugas);

//total pos
$res_pos = mysqli_query($kon, "SELECT * FROM pos");
$num_pos = mysqli_num_rows($res_pos);

//var_dump($num_kejadian);
//die;


include '../templeting/headerhtml.php';
include '../templeting/content.php';
include '../templeting/logo.php';
include '../templeting/contenthtml.php';
?>

<!-- sub main -->
<div class="section-admin container-fluid">
    <div class="row admin text-center">
        <div class="col-md-12">
            <div class="row">
                <?php
                if ($_SESSION['level_user'] == "admin") {
                    ?>

                <a href ="index_data_akun.php">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>Data Akun</b></h4>
                                <h2 class="text-left text-uppercase">
                                    <b>
                                        <?php
                                        echo $num_admin;
                                        ?>
                                    </b>
                                </h2>
                            </div>
                        </div>
                    </a>
                    <?php
                }
                ?>

                <a href ="index_data_kejadian.php">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Kejadian</b></h4>
                            <h2 class="text-left text-uppercase">
                                <b>
                                    <?php
                                    echo $num_kejadian;
                                    ?>
                                </b>
                            </h2>
                        </div>
                    </div>
                </a>
                <a href ="index_data_petugas.php">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Petugas</b></h4>
                            <h2 class="text-left text-uppercase">
                                <b><?php
                                    echo $num_petugas;
                                    ?>
                                </b>
                            </h2>
                        </div>
                    </div>
                </a>
                <a href ="index_data_pos.php">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Pos</b></h4>
                            <h2 class="text-left text-uppercase">
                                <b>
                                    <?php
                                    echo $num_pos
                                    ?>
                                </b>
                            </h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Static Table Start -->
<div class="static-table-area mg-t-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline8-list">
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <center><h1>10 Kejadian Terakhir</h1></center>
                        </div>
                    </div>
                    <div class="sparkline8-graph">
                        <div class="static-table-list">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelapor</th>
                                        <th>Telephone</th>
                                        <th>Waktu Kejadian</th>
                                        <th>Longitude</th>
                                        <th>Latitude</th>
                                        <th>Deskripsi Kejadian</th>
                                        <th>Gambar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($result = mysqli_fetch_object($query)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $result->nama_masyarakat ?></td>
                                            <td><?php echo $result->telp ?></td>
                                            <td><?php echo $result->tanggal_waktu_kejadian ?></td>
                                            <td><?php echo $result->longitude ?></td>
                                            <td><?php echo $result->latitude ?></td>
                                            <td><?php echo $result->deskripsi_kejadian ?></td>
                                            <td> <img src="upload/<?= $result->gambar ?>" style="height:50px">' </td>
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
<!-- Static Table End -->
<!-- end sub main -->

<?php
include '../templeting/footer.php';
include '../templeting/footerhtml.php';
?>