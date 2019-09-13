<?php

include '../functions/kumpulan_fungsi.php';
$kon = koneksi_db();

$id_kejadian = isset($_REQUEST['id_kj']) ? $_REQUEST['id_kj'] : 0;
$id_masyarakat_pelapor = isset($_REQUEST['id_masyarakat_pelapor']) ? $_REQUEST['id_masyarakat_pelapor'] : 0;
$longitude = isset($_REQUEST['longitude']) ? $_REQUEST['longitude'] : '';
$latitude = isset($_REQUEST['latitude']) ? $_REQUEST['latitude'] : '';
$deskripsi_kejadian = isset($_REQUEST['deskripsi_kejadian']) ? $_REQUEST['deskripsi_kejadian'] : '';
//$gambar = isset($_REQUEST['gambar']) ? $_REQUEST['gambar'] : '';

if (is_array($_FILES)) {
    if (is_uploaded_file($_FILES['gambar']['tmp_name'])) {

        $sourcePath2 = $_FILES['gambar']['tmp_name'];
        $fotobaru2 = date('dmYHis') . $_FILES['gambar']['name'];
        $targetPath2 = "../upload/" . $fotobaru2;
        move_uploaded_file($sourcePath2, $targetPath2);
        $path_database = "upload/" . $fotobaru2;
    }
}

if ($id_kejadian != 0) {
    $query = mysqli_query($kon, "UPDATE kejadian SET id_masyarakat_pelapor='$id_masyarakat_pelapor',
                                                 longitude = '$longitude',
                                                 latitude = '$latitude',
                                                 deskripsi_kejadian = '$deskripsi_kejadian',
                                                 gambar = '".$path_database."'
                                                 WHERE id_kejadian='$id_kejadian'");
} else {
    $query = mysqli_query($kon, "INSERT INTO kejadian (id_masyarakat_pelapor, longitude, latitude, deskripsi_kejadian, gambar) values ('$id_masyarakat_pelapor','$longitude','$latitude', '$deskripsi_kejadian', '".$path_database."')");
}

    if($query) {
        $status = 'Ok';    
    } 
    
    else {
        $Status = 'Gagal';
    }
    
    $data_response = array ('status'=>$status);
    echo json_encode($data_response);