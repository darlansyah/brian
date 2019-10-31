<?php
session_start();
include '../functions/kumpulan_fungsi.php';
authentication();

$kon = koneksi_db();
$query = mysqli_query($kon, "SELECT masyarakat_pelapor.nama_masyarakat_pelapor as nama_masyarakat,kejadian.* FROM masyarakat_pelapor INNER JOIN kejadian ON masyarakat_pelapor.id_masyarakat_pelapor = kejadian.id_masyarakat_pelapor ORDER BY kejadian.tanggal_waktu_kejadian DESC");

include '../templeting/headerhtml.php';
include '../templeting/content.php';
include '../templeting/logo.php';
include '../templeting/contenthtml.php';
?>

<!-- Static Table Start -->
<div class="data-table-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1><span class="table-project-n">Data</span> Kejadian</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                   data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="id">No</th>
                                        <th data-field="name" data-editable="true">Nama</th>
                                        <th data-field="waktu_kejadian" data-editable="true">Waktu Kejadian</th>
                                        <th data-field="longitude" data-editable="true">Longitude</th>
                                        <th data-field="latitude" data-editable="true">Latitude</th>
                                        <th data-field="deskripsi_kejadian" data-editable="true">Deskripsi</th>
                                        <th data-field="gambar" >Gambar</th>
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
                                            <td><?php echo $result->tanggal_waktu_kejadian ?></td>
                                            <td><?php echo $result->longitude ?></td>
                                            <td><?php echo $result->latitude ?></td>
                                            <td><?php echo $result->deskripsi_kejadian ?></td>
                                            <td> <img src="../<?= $result->gambar ?>" style="height:50px">' </td>
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

<?php
include '../templeting/footer.php';
include '../templeting/footerhtml.php';
?>
