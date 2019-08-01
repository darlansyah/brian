<?php
session_start();
require '../functions/kumpulan_fungsi.php';
authentication();
$kon = koneksi_db();
$query = mysqli_query($kon, "SELECT * FROM `pos`  
ORDER BY `pos`.`id_pos`  ASC");


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
                            <h1><span class="table-project-n">Data</span> Pos</h1>
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
                                        <th data-field="id">ID</th>
                                        <th data-field="name" data-editable="true">Nama Pos</th>
                                        <th data-field="company" data-editable="true">Alamat Pos</th>
                                        <th data-field="price" data-editable="true">Longitude Pos</th>
                                        <th data-field="date" data-editable="true">Latitude Pos</th>
                                        <?php
                                        if ($_SESSION['level_user'] == 'admin') {
                                            ?>
                                       
                                            <?php
                                        }
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($result = mysqli_fetch_object($query)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $result->nama_pos ?></td>
                                            <td><?php echo $result->alamat_pos ?></td>
                                            <td><?php echo $result->longitude_pos ?></td>
                                            <td><?php echo $result->latitude_pos ?></td>
                                            <?php
                                            if ($_SESSION['level_user'] == 'admin') {
                                                ?>
                                      
                                                <?php
                                            }
                                            ?>

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
