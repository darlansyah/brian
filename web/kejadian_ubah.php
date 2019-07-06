<?php
session_start();
include '../functions/kumpulan_fungsi.php';
authentication();
$id_kejadian = $_GET['id'];
$kon = koneksi_db();

$query = mysqli_query($kon, "SELECT * FROM kejadian WHERE id_kejadian ='$id_kejadian'");
if (mysqli_num_rows($query) > 0) {
    $result = mysqli_fetch_object($query);
} else {
    flash('kejadian', '<b> Fail - </b>Data tidak ditemukan...', 'alert alert-bordered alert-danger');
    echo "
        <script>
            window.location.href='kejadian_ubah.php';
        </script>
    ";
}

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
                        <li class="active"><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Kejadian Kebakaran</a></li>
                        <li><a href="#"><i class="fa fa-file-image-o" aria-hidden="true"></i> Pictures</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <form action="../kejadian/kejadian_simpan.php" method="post">
                            <input type="hidden" value="<?= $id_kejadian ?>" name="id_kejadian">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <input required type="hidden" name="tanggal_waktu_kejadian" class="form-control" placeholder="Tanggal Waktu Kejadian"
                                       value="<?php echo $result->tanggal_waktu_kejadian ?>">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="longitude" value="<?php echo $result->longitude ?>" placeholder="Longitude">
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-sticky-note" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="deskripsi_kejadian" value="<?php echo $result->deskripsi_kejadian ?>" placeholder="Deskripsi Kejadian">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="latitude" value="<?php echo $result->latitude ?>" placeholder="Latitude">
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-camera" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="gambar"   value="<?php echo $result->gambar ?>" placeholder="Upload Gambar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Update
                                            </button>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Batal
                                            </button>
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

<?php
include '../templeting/footer.php';
include '../templeting/footerhtml.php';
?>