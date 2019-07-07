<?php

session_start();

include '../functions/kumpulan_fungsi.php';
$kon = koneksi_db();

$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : null;
$pass = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;


// var_dump($username,$pass);
// die;


$result = mysqli_query($kon, "SELECT * FROM `admin` WHERE username = '$username' AND password = '$pass'");



if (mysqli_num_rows($result) == 1) {

    $row=mysqli_fetch_assoc($result);
    $_SESSION['sudah_login'] = TRUE;
    $_SESSION['level_user'] = $row['level_user'];
    header('location:index.php');


} else {
    echo "gagal";
}
?>
