<?php

session_start();
include 'kumpulan_fungsi.php';
$kon = koneksi_db();

$id_petugas = isset($_REQUEST['id_petugas']) ? $_REQUEST['id_petugas'] : 0;
$no_induk_pegawai = isset($_REQUEST['no_induk_pegawai']) ? $_REQUEST['no_induk_pegawai'] : '';
$nama_petugas = isset($_REQUEST['nama_petugas']) ? $_REQUEST['nama_petugas'] : '';
$id_pos = isset($_REQUEST['id_pos']) ? $_REQUEST['id_pos'] : '';

if ($id_petugas != 0) {
    $query = mysqli_query($kon, "UPDATE petugas SET no_induk_pegawai = '$no_induk_pegawai',
                                                    nama_petugas = '$nama_petugas',
                                                    id_pos = '$id_pos'
                                                    WHERE id_petugas = '$id_petugas'");
} else {
    $query = mysqli_query($kon, "INSERT INTO petugas values ('','$nama_petugas','$no_induk_pegawai','$id_pos')");
}
if ($query) {
    $status = 'Ok';
} else {
    $Status = 'Gagal';
}

$data_response = array('status' => $status);
echo json_encode($data_response);
