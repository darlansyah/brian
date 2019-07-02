<?php

//session_start();
require '../functions/kumpulan_fungsi.php';
//authentication();
$id_petugas = $_GET['id'];
$kon = koneksi_db();

//$id_pelapor= isset($_REQUEST['id_petugas']) ? $_REQUEST['id_petugas'] : 0;

$query = mysqli_query($kon, "DELETE FROM petugas WHERE id_petugas='$id_petugas'");

if ($query) {
    flash('petugas', '<b> Success - </b>Data Berhasil Dihapus...', 'alert alert-bordered alert-success');
    echo "
        <script>
            alert('Data Berhasil Dihapus');
            window.location.href='../web/data_petugas.php';
        </script>
    ";
} else {
    flash('petugas', '<b> Fail - </b>Data Gagal Dihapus...', 'alert alert-bordered alert-danger');
    echo"
        <script>
            alert('Data Gagal Dihapus');
            window.location.href='../web/data_petugas.php';
        </script>
    ";
}