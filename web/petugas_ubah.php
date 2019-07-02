<?php
session_start();
require '../functions/kumpulan_fungsi.php';
authentication();
$id_petugas = $_GET['id'];

$kon = koneksi_db();

$query = mysqli_query($kon, "SELECT * FROM petugas WHERE id_petugas='$id_petugas'");
if (mysqli_num_rows($query) > 0) {
    $result = mysqli_fetch_object($query);
} else {
    flash('petugas', '<b> Fail - </b>Data tidak ditemukan...', 'alert alert-bordered alert-danger');
    echo "
        <script>
            window.location.href='petugas_ubah.php';
        </script>
    ";
}
$result_pos = mysqli_query($kon, "SELECT * FROM pos");
include '../templeting/headerhtml.php';
include '../templeting/content.php';
include '../templeting/logo.php';
include '../templeting/contenthtml.php';
?>
<div class="single-pro-review-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="review-tab-pro-inner">
                    <ul id="myTab3" class="tab-review-design">
                        <li class="active"><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Identitas Petugas</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <form action="../petugas/petugas_simpan.php" method="post">
                                <input type="hidden" value="<?= $id_petugas ?>" name="id_petugas">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-sticky-note" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="no_induk_pegawai" value="<?php echo $result->no_induk_pegawai ?>" placeholder="No Induk Petugas">
                                            </div>
                                            Nama Pos : 
                                            <select name="id_pos">
                                                <?php
                                                while ($row = mysqli_fetch_object($result_pos)) {
                                                    ?>

                                                    <option value="<?= $row->id_pos ?>"  <?php
                                                    if ($result->id_pos == $row->id_pos) {
                                                        echo "selected";
                                                    }
                                                    ?>> <?= $row->nama_pos ?> </option>
                                                            <?php
                                                        }
                                                        ?>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control"  name="nama_petugas"  value="<?php echo $result->nama_petugas ?>" placeholder="Nama Petugas">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Update
                                            </button>
                                            <a href="data_petugas.php" class="btn btn-primary waves-effect waves-light m-r-10">Batal
                                            </a>
                                        </div>
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

<?php
include '../templeting/footer.php';
include '../templeting/footerhtml.php';
?>
