<?php
session_start();
// cek apakah ini admin ?
if ($_SESSION['level_user'] != 'admin') {
    ?>
    <script>
        alert('Anda Berhasil Masuk!');
        window.location.href = "data_kejadian.php";
    </script>
    <?php
}

require '../functions/kumpulan_fungsi.php';
authentication();
$kon = koneksi_db();
$query = mysqli_query($kon, "SELECT * FROM `user`  
ORDER BY `user`.`id_user` ASC");




include '../templeting/headerhtml.php';
include '../templeting/content.php';
include '../templeting/logo.php';
include '../templeting/contenthtml.php';
?>
<div class="data-table-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1><span class="table-project-n">Data</span> Admin</h1>
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
                                        <th data-field="name" data-editable="true">ID Profile</th>
                                        <th data-field="company" data-editable="true">Username</th>
                                        <th data-field="price" data-editable="true">Password</th>
                                        <th data-field="date" data-editable="true">Level User</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($result = mysqli_fetch_object($query)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $result->id_profile ?></td>
                                            <td><?php echo $result->username ?></td>
                                            <td><?php echo $result->password ?></td>
                                            <td><?php echo $result->level_user ?></td>
                                            <td>
                                                <a href="user_ubah.php?id=<?= $result->id_user; ?>"
                                                   class="btn btn-outline-primary btn-sm mg-r-5"><div><i class="fa fa-edit"></i></div></a>
                                                <a href="user_hapus.php?id=<?= $result->id_user; ?>"
                                                   onclick="return confirm('Anda Yakin Akan Menghapus <?php echo $result->username ?>?')"
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


<?php
include '../templeting/footer.php';
include '../templeting/footerhtml.php';
?>
