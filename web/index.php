<?php
session_start();
include '../functions/kumpulan_fungsi.php';
authentication();
//
$kon = koneksi_db();
$query = mysqli_query($kon, "SELECT masyarakat_pelapor.telp, masyarakat_pelapor.nama_masyarakat_pelapor as nama_masyarakat,kejadian.* FROM masyarakat_pelapor INNER JOIN kejadian ON masyarakat_pelapor.id_masyarakat_pelapor = kejadian.id_masyarakat_pelapor order by tanggal_waktu_kejadian desc limit 10");
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
                <a href ="data_user.php">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                            <h4 class="text-left text-uppercase"><b>Admin & User</b></h4>

                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="col-xs-3 mar-bot-15 text-left">
                                    <label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">10,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 78%;" class="progress-bar bg-green"></div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href ="data_kejadian.php">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Kejadian</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-red">15% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">5,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href ="data_petugas.php">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Petugas</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">$70,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 60%;" class="progress-bar bg-blue"></div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href ="data_pos.php">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Pos</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-purple">80% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">$200,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 60%;" class="progress-bar bg-purple"></div>
                            </div>
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
                            <center><h1>10 Kejadian Terakhir</h1></center>>
                        </div>
                    </div>
                    <div class="sparkline8-graph">
                        <div class="static-table-list">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
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
                                            <td><?php echo $result->gambar ?></td>
                                            <td>
                                                <a href="kejadian_ubah.php?id=<?= $result->id_kejadian; ?>"
                                                   class="btn btn-outline-primary btn-sm mg-r-5"><div><i class="fa fa-edit"></i></div></a>
                                                <a href="../kejadian/kejadian_hapus.php?id=<?= $result->id_kejadian; ?>"
                                                   onclick="return confirm('Anda yakin akan menghapus <?php echo $result->id_masyarakat_pelapor ?>?')"
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
<!-- Static Table End -->
<!-- end sub main -->

<?php
include '../templeting/footer.php';
include '../templeting/footerhtml.php';
?>