<?php

include '../functions/kumpulan_fungsi.php';
$id_masyarakat_pelapor = isset($_REQUEST['id_mp']) ? $_REQUEST['id_mp'] : 0;
$kon = koneksi_db();
//echo $id_masyarakat_pelapor;
//exit();

$query = mysqli_query($kon, "DELETE FROM masyarakat_pelapor WHERE id_masyarakat_pelapor='$id_masyarakat_pelapor'");

    if($query) {
        $status = 'Ok';    
    } 
    
    else {
        $status = 'Gagal';
    }
    
    $data_response = array ('status'=>$status);
    echo json_encode($data_response);