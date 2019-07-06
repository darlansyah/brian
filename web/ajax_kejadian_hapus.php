<?php

include '../functions/kumpulan_fungsi.php';
$id_kejadian= isset($_REQUEST['id_kj']) ? $_REQUEST['id_kj'] : 0;
$kon = koneksi_db();

$query = mysqli_query($kon, "DELETE FROM kejadian WHERE id_kejadian='$id_kejadian'");

    if($query) {
        $status = 'Ok';    
    } 
    
    else {
        $status = 'Gagal';
    }
    
    $data_response = array ('status'=>$status);
    echo json_encode($data_response);