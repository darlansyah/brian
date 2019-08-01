<?php
session_start();
include '../functions/kumpulan_fungsi.php';
authentication();
include '../templeting/headerhtml.php';
include '../templeting/content.php';
include '../templeting/logo.php';
include '../templeting/contenthtml.php';
$kon = koneksi_db();
$result = mysqli_query($kon, "SELECT * FROM pos");
?>

<!-- Single pro tab review Start-->
<div class="single-pro-review-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="review-tab-pro-inner">
                    <ul id="myTab3" class="tab-review-design">
                        <li class="active"><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Identitas Pengguna</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <form action="../petugas/petugas_simpan.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-sticky-note" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="no_induk_pegawai" placeholder="No Induk Petugas">
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="username" placeholder="Username">
                                            </div>
                                            Nama Pos : 
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-bank" aria-hidden="true"></i></span>
                                                <select class="form-control" name="id_pos">
                                                    <?php
                                                    while ($row = mysqli_fetch_object($result)) {
                                                        ?>
                                                        <option value="<?= $row->id_pos ?>"><?= $row->nama_pos ?></option>
                                                        <?php
                                                    }
                                                    ?>


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control"  name="nama_petugas" placeholder="Nama Petugas">
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="password" placeholder="Password">
                                            </div>
                                            <div class="input-group mg-b-pro-edt">                                                
                                            </div>
                                            <div class="input-group mg-b-pro-edt">                                                
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="i-checks pull-left">
                                                    <label>
                                                        <input type="checkbox" name="level_user" value="admin"> <i></i> Level Admin </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Simpan
                                            </button>
                                            <a href="index.php" class="btn btn-primary waves-effect waves-light m-r-10">Batal
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
