<?php

include '../functions/kumpulan_fungsi.php';

$kon = koneksi_db();
$query = mysqli_query($kon, "select * from pos");
$data = array();
while ($result = mysqli_fetch_object($query)) {
    array_push($data, $result);
}
echo json_encode($data);
