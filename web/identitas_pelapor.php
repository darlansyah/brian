<?php
session_start();
include '../functions/kumpulan_fungsi.php';
authentication();
include '../templeting/headerhtml.php';
include '../templeting/content.php';
include '../templeting/logo.php';
include '../templeting/contenthtml.php';
?>

<!-- Single pro tab review Start-->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-tab-pro-inner">
                <ul id="myTab3" class="tab-review-design">
                    <li class="active"><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Identitas Pelapor</a></li>
                </ul>
                <div id="myTabContent" class="tab-content custom-product-edit">
                    <form action="../masyarakat_pelapor/masyarakat_pelapor_simpan.php" method="post">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="nama_masyarakat_pelapor" placeholder="Nama">
                                        </div>
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="telp" placeholder="No Telephone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="fa fa-sticky-note" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="no_ktp" placeholder="No KTP">
                                        </div>
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Simpan
                                        </button>
                                        <a href="index.php" class="btn btn-primary waves-effect waves-light m-r-10">Batal </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include '../templeting/footer.php';
include '../templeting/footerhtml.php';
?>
