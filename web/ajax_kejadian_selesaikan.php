<?php

include '../functions/kumpulan_fungsi.php';
$id_kejadian = isset($_REQUEST['id_kj']) ? $_REQUEST['id_kj'] : 0;
$idPetugas = $_REQUEST['idPetugas'];
$kon = koneksi_db();

$kejadian = mysqli_query($kon, "SELECT * FROM kejadian WHERE id_kejadian = '$id_kejadian'");
$row = mysqli_fetch_assoc($kejadian);
$id_intensitas = $row['id_intensitas'];

$intensitas = mysqli_query($kon, "SELECT * FROM intensitas_kebakaran WHERE id_intensitas = '$id_intensitas'");
$row = mysqli_fetch_assoc($intensitas);
$jumlah = $row['jumlah'];

mysqli_query($kon, "UPDATE pos p JOIN petugas ps "
        . "ON p.id_pos = ps.id_pos  SET "
        . "p.armada = p.armada - $jumlah, "
        . "p.armada_max = p.armada_max + $jumlah "
        . "WHERE ps.id_petugas = '$idPetugas' AND p.armada > 0");

$query = mysqli_query($kon, "UPDATE kejadian SET status = 'Selesai' WHERE id_kejadian='$id_kejadian'");

if($query) {
    $status = 'Ok';
}
else {
    $status = 'Gagal';
}

$data_response = array ('status'=>$status);
echo json_encode($data_response);