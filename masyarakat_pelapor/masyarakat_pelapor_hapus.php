<?php

//session_start();
include '../functions/kumpulan_fungsi.php';
//authentication();
$id_masyarakat_pelapor = $_GET['id'];
$kon = koneksi_db();

//$id_masyarakat_pelapor = isset($_REQUEST['id_masyarakat_pelapor']) ? $_REQUEST['id_masyarakat_pelapor'] : 0;

$query = mysqli_query($kon, "DELETE FROM masyarakat_pelapor WHERE id_masyarakat_pelapor='$id_masyarakat_pelapor'");

if ($query) {
    flash('masyarakat_pelapor', '<b> Success - </b>Data berhasil dihapus...', 'alert alert-bordered alert-success');
    echo "
        <script>
            alert('Data Berhasil Dihapus');
            window.location.href='../web/data_pelapor.php';
        </script>
    ";
} else {
    flash('masyarakat_pelapor', '<b> Fail - </b>Data gagal dihapus...', 'alert alert-bordered alert-danger');
    echo"
        <script>
            alert('Data Gagal Dihapus');
            window.location.href='../web/data_pelapor.php';
        </script>
    ";
}
