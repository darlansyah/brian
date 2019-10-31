<?php

include '../functions/kumpulan_fungsi.php';

$id_profile = $_POST['id_profile'];

$kon = koneksi_db();
$query = mysqli_query($kon, "SELECT id_pos FROM petugas where id_petugas = " . $id_profile);
$result = mysqli_fetch_array($query);
$id_pos = $result['id_pos'];

$query = "SELECT "
        . "kejadian.id_kejadian as id_kejadian, "
        . "masyarakat_pelapor.nama_masyarakat_pelapor as nama_pelapor, "
        . "kejadian.tanggal_waktu_kejadian as tanggal_waktu_kejadian, "
        . "kejadian.longitude as longitude, "
        . "kejadian.latitude as latitude, "
        . "kejadian.deskripsi_kejadian as deskripsi_kejadian, "
        . "kejadian.gambar as gambar, "
        . "intensitas_kebakaran.kategori as kategori "
        . "FROM kejadian "
        . "INNER JOIN masyarakat_pelapor ON masyarakat_pelapor.id_masyarakat_pelapor = kejadian.id_masyarakat_pelapor "
        . "INNER JOIN intensitas_kebakaran ON intensitas_kebakaran.id_intensitas = kejadian.id_intensitas "
        . "WHERE kejadian.status = '' AND kejadian.id_pos = " . $id_pos . " "
        . "ORDER BY kejadian.tanggal_waktu_kejadian DESC";

$query = mysqli_query($kon, $query);
$data = array();

while ($result = mysqli_fetch_assoc($query)) {
    array_push($data, $result);
}

echo json_encode($data);
