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
$nama = isset($_REQUEST['nama']) ? $_REQUEST['nama'] : '';
$level_user = isset($_REQUEST['level_user']) ? $_REQUEST['level_user'] : 'petugas';

if ($id_user != 0) {
    $query = mysqli_query($kon, "UPDATE admin SET id_profile = '1',
                                                 username = '$username',
                                                 password = '$password',
                                                 name = '$nama',                                                 
                                                 level_user = '$level_user'
                                                 
                                                 where id_user = $id_user");
} else {
    $query = mysqli_query($kon, "INSERT INTO admin values ('',1,'$username','$password','$nama','$level_user')");
}

// star my script
if ($query) {
    echo "<script>
    alert('Data Berasil Masuk');
    document.location.href ='data_user.php';
    </script>
    ";
}
