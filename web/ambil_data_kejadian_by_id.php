<?php

include '../functions/kumpulan_fungsi.php';

$id_kejadian = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;

$kon = koneksi_db();
$query = mysqli_query($kon, "SELECT * FROM `kejadian` where id_kejadian = '$id_kejadian' ");

$data = array();
while ($result = mysqli_fetch_object($query)) {
   $kejadian =  array_push($data, $result);
}

echo json_encode($data);
