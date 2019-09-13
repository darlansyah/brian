<?php

include '../functions/kumpulan_fungsi.php';
$kon = koneksi_db();

$username = isset($_POST['username']) ? $_POST['username'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$telp = isset($_POST['telp']) ? $_POST['telp'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$no_ktp = isset($_POST['no_ktp']) ? $_POST['no_ktp'] : '';

$query = mysqli_query ($kon,"INSERT INTO masyarakat_pelapor values ('','$no_ktp','$nama','$telp','$alamat');");
$last_id_pelapor = mysqli_insert_id($kon);

$query_user = mysqli_query($kon, "INSERT INTO user values ('',$last_id_pelapor,'$username','$pass','user')");

if($query) {
$status = 'Ok';
}

else {
$status = 'Gagal';
}

$data_response = array ('status' => $status);
echo json_encode($data_response);
