<?php
include '../functions/kumpulan_fungsi.php';

$conn = koneksi_db();

$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_POST['gambar'];
$id_profil = $_POST['id_profile'];

$query = "INSERT INTO kejadian(id_masyarakat_pelapor, longitude, latitude, deskripsi_kejadian, gambar) "
        . "VALUES(".$id_profil.",".$longitude.",".$latitude.",'".$deskripsi."', '".$gambar."')";

if (mysqli_query($conn, $query)) {
    $status  = array( 'status' => 'berhasil' );
    json_encode($status);
} else {
    $status = array( 'status' => 'gagal' );
    json_encode($status);
}

