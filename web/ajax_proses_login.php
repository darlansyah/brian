<?php

include '../functions/kumpulan_fungsi.php';
$kon = koneksi_db();

$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : null;
$pass = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;

$quser = mysqli_query($kon, "SELECT * FROM user WHERE username = '$username' AND password ='$pass'");
if (mysqli_num_rows($quser) == 1) {
    $status = 'ok';
    $data = mysqli_fetch_assoc($quser);
} else {
    $status = 'gagal';
    $data = NULL;
}

$response = array(
    'status' => $status,
    'data' => $data
);
echo json_encode($response);
