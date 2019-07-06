<?php

include '../functions/kumpulan_fungsi.php';
$kon = koneksi_db();

$username = isset($_POST['username']) ? $_POST['username'] : '';
$pass = isset($_POST['pass']) ? md5($_POST['pass']) : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$telp = isset($_POST['telp']) ? $_POST['telp'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$no_ktp = isset($_POST['no_ktp']) ? $_POST['no_ktp'] : '';

// if ($id_masyarakat_pelapor != 0) {
//     $query = mysqli_query($kon, "UPDATE masyarakat_pelapor SET nama_masyarakat_pelapor='$nama_masyarakat_pelapor',
//                                                 no_ktp = '$no_ktp',
//                                                 telp = '$telp',
//                                                 alamat = '$alamat'
//                                                 WHERE id_masyarakat_pelapor='$id_masyarakat_pelapor'");
// } else {
    // $query1=mysqli_query($kon,"insert into user values('','','$username','$pass','$nama','user')");
    // $query = mysqli_query($kon, "INSERT INTO masyarakat_pelapor values ('','$no_ktp','$nama','$telp','$alamat')");

    $query="insert into user values('','','$username','$pass','$nama','user');";
    $query.="INSERT INTO masyarakat_pelapor values ('','$no_ktp','$nama','$telp','$alamat');";

// }
    if(mysqli_multi_query($kon, $query)) {
        $status = 'Ok';    
    } 
    
    else {
        $status = 'Gagal';
    }
    
    $data_response = array ('status'=>$status);
    echo json_encode($data_response);