<?php

//session_start();
require '../functions/kumpulan_fungsi.php';
//authentication();
$kon = koneksi_db();

$id_pos = isset($_REQUEST['id_pos']) ? $_REQUEST['id_pos'] : 0;
$nama_pos = isset($_REQUEST['nama_pos']) ? $_REQUEST['nama_pos'] : 0;
$alamat_pos = isset($_REQUEST['alamat_pos']) ? $_REQUEST['alamat_pos'] : '';
$longitude_pos = isset($_REQUEST['longitude_pos']) ? $_REQUEST['longitude_pos'] : '';
$latitude_pos = isset($_REQUEST['latitude_pos']) ? $_REQUEST['latitude_pos'] : '';
$armada = isset($_REQUEST['armada']) ? $_REQUEST['armada'] : '';
$armada_max = isset($_REQUEST['armada_max']) ? $_REQUEST['armada_max'] : '';

if ($id_pos != 0) {
    $query = mysqli_query($kon, "UPDATE pos SET nama_pos='$nama_pos',
                                                 alamat_pos = '$alamat_pos',
                                                 longitude_pos = '$longitude_pos',
                                                 latitude_pos = '$latitude_pos',
                                                 armada = '$armada',
                                                 armada_max = '$armada_max'
                                                 WHERE id_pos = '$id_pos'");
} else {
    $query = mysqli_query($kon, "INSERT INTO pos values ('','$nama_pos','$alamat_pos','$longitude_pos','$latitude_pos','$armada','$armada_max')");
}

if ($query) {
    echo "<script>
    alert('Data Berasil Masuk');
   document.location.href ='../web/data_pos.php';
    </script>
    ";
}
else
    echo $query;