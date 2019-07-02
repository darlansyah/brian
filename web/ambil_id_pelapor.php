<?php

include 'kumpulan_fungsi.php';
$id_mp = $_REQUEST['id_mp'];

$kon = koneksi_db();
$query = mysqli_query($kon, "select * from masyarakat_pelapor where id_masyarakat_pelapor = $id_mp");

$result = mysqli_fetch_object($query);
echo json_encode($result);
