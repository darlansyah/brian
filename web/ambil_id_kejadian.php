<?php

include 'kumpulan_fungsi.php';
$id_kj = $_REQUEST['id_kj'];

$kon = koneksi_db();
$query = mysqli_query($kon, "select * from kejadian where id_kejadian = $id_kj");

$result = mysqli_fetch_object($query);
echo json_encode($result);
