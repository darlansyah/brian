<?php
include '../functions/kumpulan_fungsi.php';

$conn = koneksi_db();

$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];
$deskripsi = $_POST['deskripsi'];
$id_profil = $_POST['id_profil'];
print_r($_POST);
print_r($_FILES);
exit;

if (is_array($_FILES)) {
    if (is_uploaded_file($_FILES['gambar']['tmp_name'])) {

        $sourcePath2 = $_FILES['gambar']['tmp_name'];
        $fotobaru2 = date('dmYHis') . $_FILES['gambar']['name'];
        $targetPath2 = "../upload/" . $fotobaru2;
        move_uploaded_file($sourcePath2, $targetPath2);
        $path_database = "upload/" . $fotobaru2;
    }
}

$query = "INSERT INTO kejadian(id_masyarakat_pelapor, longitude, latitude, deskripsi_kejadian, gambar) "
        . "VALUES(".$id_profil.",".$longitude.",".$latitude.",'".$deskripsi."', '".$path_database."')";

if (mysqli_query($conn, $query)) {
    $status  = array( 'status' => 'berhasil' );
    echo json_encode($status);
} else {
    $status = array( 'status' => 'gagal' );
   echo json_encode($status);
}