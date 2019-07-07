<?php
session_start();
//cek apakah ini admin ?
if ($_SESSION['level_user'] != 'admin') {
    ?>
    <script>
        alert('Anda Berhasil Masuk!');
        window.location.href = "data_kejadian.php";
    </script>
    <?php
}
include '../functions/kumpulan_fungsi.php';
authentication();


include '../templeting/headerhtml.php';
include '../templeting/content.php';
include '../templeting/logo.php';
include '../templeting/contenthtml.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-tab-pro-inner">
                <ul id="myTab3" class="tab-review-design">
                    <li class="active"><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Identitas Admin</a></li>
                </ul>
                <div id="myTabContent" class="tab-content custom-product-edit">
                    <form action="user_simpan.php" method="post">
                        <input type="hidden" name="id_profil" value="1">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="username" placeholder="Username">
                                        </div>
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="password" placeholder="Password">
                                        </div>
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="fa fa-sticky-note" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="nama" placeholder="Nama">
                                        </div>
                                        <div class="input-group mg-b-pro-edt">

                                            <input type="checkbox" name="level_user" value="admin"> Level Admin<br>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Simpan
                                        </button>
                                        <a href="data_user.php" class="btn btn-primary waves-effect waves-light m-r-10">Batal </a>

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
