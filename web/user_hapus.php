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
include '../functions/kumpulan_fungsi.php';
authentication();
$id_user = $_GET['id'];

$kon = koneksi_db();

$query = mysqli_query($kon, "DELETE FROM user WHERE id_user='$id_user'");

if ($query) {
    flash('kejadian', '<b> Success - </b>Data Berhasil Dihapus...', 'alert alert-bordered alert-success');
    echo "
        <script>
            alert('Data Berhasil Dihapus');
            window.location.href='data_user.php';
        </script>
    ";
} else {
    flash('kejadian', '<b> Fail - </b>Data Gagal Dihapus...', 'alert alert-bordered alert-danger');
    echo"
        <script>
            alert('Data Gagal Dihapus');
            window.location.href='data_user.php';
        </script>
    ";
}