<?php

include 'kumpulan_fungsi.php';

$kon = koneksi_db();
$query = mysqli_query($kon, "select * from masyarakat_pelapor");
$data = array();
while ($result = mysqli_fetch_object($query)) {
    array_push($data, $result);
}
echo json_encode($data);
