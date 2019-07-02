<?php

include 'kumpulan_fungsi.php';
$id_petugas = isset($_REQUEST['id_ptgs']) ? $_REQUEST['id_ptgs'] : 0;
$kon = koneksi_db();

$query = mysqli_query($kon, "DELETE FROM petugas WHERE id_petugas='$id_petugas'");

    if($query) {
        $status = 'Ok';    
    } 
    
    else {
        $status = 'Gagal';
    }
    
    $data_response = array ('status'=>$status);
    echo json_encode($data_response);