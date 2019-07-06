<?php

session_start();
include '../functions/kumpulan_fungsi.php';
authentication();
$kon = koneksi_db();

$id_kejadian = isset($_REQUEST['id_kejadian']) ? $_REQUEST['id_kejadian'] : '';
$id_masyarakat_pelapor=isset($_POST['id_masyarakat_pelapor'])?$_POST['id_masyarakat_pelapor']:'';
$longitude = isset($_REQUEST['longitude']) ? $_REQUEST['longitude'] : '';
$latitude = isset($_REQUEST['latitude']) ? $_REQUEST['latitude'] : '';
$deskripsi_kejadian = isset($_REQUEST['deskripsi_kejadian']) ? $_REQUEST['deskripsi_kejadian'] : '';
$gambar = isset($_REQUEST['gambar']) ? $_REQUEST['gambar'] : '';

if ($id_kejadian != null) {

    $query = mysqli_query($kon, "UPDATE kejadian SET 
                                                 longitude = '$longitude',
                                                 latitude = '$latitude',
                                                 deskripsi_kejadian = '$deskripsi_kejadian',
                                                 gambar = '$gambar'
                                                 WHERE id_kejadian='$id_kejadian'");
} else {
    $query = mysqli_query($kon, "INSERT INTO kejadian (id_masyarakat_pelapor, longitude, latitude, deskripsi_kejadian, gambar) values ('$id_masyarakat_pelapor','$longitude','$latitude', '$deskripsi_kejadian', '$gambar')");
}

// star my script
if ($query) {
    echo "<script>
    alert('Data Berasil Masuk');
   document.location.href ='../web/data_kejadian.php';
    </script>
    ";
    // header('location:index.php?konten=masyarakat_pelapor_tambah');
}else{
    echo "failed";
}