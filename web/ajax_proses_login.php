<?php

include '../functions/kumpulan_fungsi.php';
$kon = koneksi_db();

// $username = isset($_REQUEST['username']) ? $_REQUEST['username'] : null;
// $pass = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;
// $nama = isset($_REQUEST['nama']) ? $_REQUEST['nama'] : null;
// $no_ktp = isset($_REQUEST['no_ktp']) ? $_REQUEST['no_ktp'] : null;
// $telp = isset($_REQUEST['telp']) ? $_REQUEST['telp'] : null;
// $alamat = isset($_REQUEST['alamat']) ? $_REQUEST['alamat'] : null;
//
// $quser = mysqli_query($kon, "select * from user where username = '$username' and password ='$pass'");
// if (mysqli_num_rows($quser)) {
//     $status = 'ok';
//     $data = mysqli_fetch_assoc($quser);
// } else {
//     $status = 'gagal';
//     $data = NULL;
// }
//
// $response = array(
//     'status' => $status,
//     'data' => $data
// );
// echo json_encode($response);


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
