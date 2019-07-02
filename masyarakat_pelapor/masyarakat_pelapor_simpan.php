<?php
//var_dump($_POST);
//die;
session_start();
include '../functions/kumpulan_fungsi.php';
//authentication();
$kon = koneksi_db();

$id_masyarakat_pelapor = isset($_REQUEST['id_masyarakat_pelapor']) ? $_REQUEST['id_masyarakat_pelapor'] : 0;
$nama_masyarakat_pelapor = isset($_REQUEST['nama_masyarakat_pelapor']) ? $_REQUEST['nama_masyarakat_pelapor'] : '';
$no_ktp = isset($_REQUEST['no_ktp']) ? $_REQUEST['no_ktp'] : '';
$telp = isset($_REQUEST['telp']) ? $_REQUEST['telp'] : '';
$alamat = isset($_REQUEST['alamat']) ? $_REQUEST['alamat'] : '';
$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : '';
$pass = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : '';

//var_dump($username);
//die;
if ($id_masyarakat_pelapor != 0) {
    $query = mysqli_query($kon, "UPDATE masyarakat_pelapor SET nama_masyarakat_pelapor='$nama_masyarakat_pelapor',
                                                no_ktp = '$no_ktp',
                                                telp = '$telp',
                                                alamat = '$alamat',
                                                username = '$username',
                                                pass = '$pass'
                                                WHERE id_masyarakat_pelapor='$id_masyarakat_pelapor'");
} else {
    $query = mysqli_query($kon, "INSERT INTO masyarakat_pelapor values ('','$no_ktp','$nama_masyarakat_pelapor','$telp','$alamat','$username','$pass')");
}

// star my script
if ($query) {
    echo "<script>
    alert('anda berhasil Register');
    document.location.href ='../web/login.php';
    </script>
    ";
//    

// header('location:index.php?konten=masyarakat_pelapor_tambah');
}

 
// end my script
