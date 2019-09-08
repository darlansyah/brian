<?php

include '../functions/kumpulan_fungsi.php';


$id_profile = $_REQUEST['id_profile'];

$kon = koneksi_db();
$query = mysqli_query($kon, "
    SELECT kejadian.*, masyarakat_pelapor.nama_masyarakat_pelapor as nama_pelapor 
    FROM `kejadian` 
    INNER JOIN masyarakat_pelapor ON kejadian.id_masyarakat_pelapor = masyarakat_pelapor.id_masyarakat_pelapor 
    JOIN pos ON pos.id_pos = kejadian.id_pos
    JOIN petugas ON petugas.id_pos = pos.id_pos
    WHERE petugas.id_petugas = '$id_profile'
    AND kejadian.status = ''
");

$data = array();
while ($result = mysqli_fetch_object($query)) {
    $kejadian =  array_push($data, $result);
}

echo json_encode($data);
