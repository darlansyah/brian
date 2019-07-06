<?php

include '../functions/kumpulan_fungsi.php';

$id_kj = $_REQUEST['id_kj'];

$kon = koneksi_db();
$query = mysqli_query($kon, "select * from kejadian where id_kejadian = $id_kj");

$result = mysqli_fetch_object($query);
//var_dump($result);
//die;
echo json_encode($result);
