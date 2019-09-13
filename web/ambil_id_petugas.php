<?php

include '../functions/kumpulan_fungsi.php';
$id_ptgs = $_REQUEST['id_ptgs'];

$kon = koneksi_db();
$query = mysqli_query($kon, "select * from petugas join pos on petugas.id_pos = pos.id_pos where id_petugas = $id_ptgs");

$result = mysqli_fetch_object($query);

if ($result) {
    $res = $result;
    $res->status = 'Ok';
}
else {
    $res = new stdClass();
    $res->status = 'Gagal';
}


//var_dump($res);die();

echo json_encode($res);
