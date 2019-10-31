<?php

include '../functions/kumpulan_fungsi.php';

$kon = koneksi_db();
$id_profile = $_POST['id_profile'];
$query = mysqli_query($kon, "SELECT id_pos FROM petugas where id_petugas = " . $id_profile);
$result = mysqli_fetch_array($query);
$id_pos = $result['id_pos'];

$query = mysqli_query($kon, "SELECT * From masyarakat_pelapor "
        . "INNER JOIN kejadian on masyarakat_pelapor.id_masyarakat_pelapor = kejadian.id_masyarakat_pelapor "
        . "WHERE kejadian.id_pos = "
        . "$id_pos AND kejadian.status = '' "
        . "ORDER BY kejadian.tanggal_waktu_kejadian DESC");        

$data = array();
while ($result = mysqli_fetch_array($query)) {
    array_push($data, $result);
}
echo json_encode($data);
