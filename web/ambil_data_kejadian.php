<?php

include '../functions/kumpulan_fungsi.php';

$id_profile = isset($_REQUEST['id_profile']) ? $_REQUEST['id_profile'] : null;

$kon = koneksi_db();
$query = mysqli_query($kon, 
        "SELECT masyarakat_pelapor.nama_masyarakat_pelapor as nama_masyarakat,kejadian.*, "
        . "pos.*, intensitas_kebakaran.kategori "
        . "FROM masyarakat_pelapor "
        . "INNER JOIN kejadian ON masyarakat_pelapor.id_masyarakat_pelapor = kejadian.id_masyarakat_pelapor "
        . "JOIN pos ON kejadian.id_pos = pos.id_pos "
        . "JOIN intensitas_kebakaran ON intensitas_kebakaran.id_intensitas = kejadian.id_intensitas "
        . "WHERE kejadian.status = '' "
        . "ORDER BY kejadian.tanggal_waktu_kejadian DESC");

$data = array();
while ($result = mysqli_fetch_object($query)) {
   $kejadian =  array_push($data, $result);
}

echo json_encode($data);
