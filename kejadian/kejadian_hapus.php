<?php

//session_start();
include '../functions/kumpulan_fungsi.php';
$id_kejadian = $_GET['id'];
//var_dump($id_kejadian);
//die;
$kon = koneksi_db();

// $id_pelapor= isset($_REQUEST['id_pelapor']) ? $_REQUEST['id_pelapor'] : 0;

$query=  mysqli_query($kon, "DELETE FROM kejadian WHERE id_kejadian='$id_kejadian'");

if ($query) {
    flash('kejadian', '<b> Success - </b>Data Berhasil Dihapus...', 'alert alert-bordered alert-success');
    echo "
        <script>
            alert('Data Berhasil Dihapus');
            window.location.href='../web/data_kejadian.php';
        </script>
    ";
} else {
    flash('kejadian', '<b> Fail - </b>Data Gagal Dihapus...', 'alert alert-bordered alert-danger');
    echo"
        <script>
            alert('Data Gagal Dihapus');
            window.location.href='../web/data_kejadian.php';
        </script>
    ";
}