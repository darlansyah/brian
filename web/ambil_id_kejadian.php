<?php

include '../functions/kumpulan_fungsi.php';

$id_kj = $_REQUEST['id_kj'];

$kon = koneksi_db();
$query = mysqli_query($kon, "SELECT * from kejadian INNER JOIN masyarakat_pelapor "
        . "ON masyarakat_pelapor.id_masyarakat_pelapor = kejadian.id_masyarakat_pelapor "
        . "where kejadian.id_kejadian = $id_kj");

$result = mysqli_fetch_object($query);
//echo "<pre>";
//var_Dump($result);
//echo "</pre>";
echo json_encode($result);
