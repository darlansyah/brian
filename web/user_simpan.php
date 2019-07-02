<?php

session_start();
// cek apakah ini admin ?
if ($_SESSION['level_user'] != 'admin') {
    ?>
    <script>
        alert('Anda Berhasil Masuk!');
        window.location.href = "index.php";
    </script>
    <?php

}
include '../functions/kumpulan_fungsi.php';
authentication();
$kon = koneksi_db();

$id_user = isset($_REQUEST['id_user']) ? $_REQUEST['id_user'] : 0;
$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : '';
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';
$level_user = isset($_REQUEST['level_user']) ? $_REQUEST['level_user'] : 'user';

//$id_profil = isset($_REQUEST['id_profil']) ? $_REQUEST['id_profil'] : '';
//var_dump($level_user);
//die;
if ($id_user != 0) {
    $query = mysqli_query($kon, "UPDATE admin SET id_profile = '1',
                                                 username = '$username',
                                                 password = '$password',
                                                 level_user = '$level_user'
                                                 where id_user = $id_user");
} else {
    $query = mysqli_query($kon, "INSERT INTO admin values ('',1,'$username','$password','$level_user')");
}

// star my script
if ($query) {
    echo "<script>
    alert('Data Berasil Masuk');
    document.location.href ='data_user.php';
    </script>
    ";
    // header('location:index.php?konten=masyarakat_pelapor_tambah');
}
// end my script
//
// if ($query) {
//    flash('kejadian', '<b> Success - </b>Data berhasil disimpan...', 'alert alert-bordered alert-success');
        //  echo "
        //    <script>
        //      window.location.href='index.php?konten=kejadian';
        // </script>
        //";
//} else {
        //  flash('kejadian', '<b> Fail - </b>Data gagal disimpan...', 'alert alert-bordered alert-danger');
        //echo"
        //  <script>
        //    window.location.href='index.php?konten=kejadian';
        // </script>
        //";
//}
//
           