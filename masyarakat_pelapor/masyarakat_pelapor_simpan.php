<?php
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
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';
$level_user = isset($_REQUEST['level_user']) ? $_REQUEST['level_user'] : 'masyarakat_pelapor';

if ($id_masyarakat_pelapor != 0) {
    $query = mysqli_query($kon, "UPDATE masyarakat_pelapor SET nama_masyarakat_pelapor='$nama_masyarakat_pelapor',
                                                no_ktp = '$no_ktp',
                                                telp = '$telp',
                                                alamat = '$alamat'
                                                WHERE id_masyarakat_pelapor='$id_masyarakat_pelapor'");
} else {
    $query = mysqli_query($kon, "INSERT INTO masyarakat_pelapor values ('','$no_ktp','$nama_masyarakat_pelapor','$telp','$alamat')");

    $last_id_petugas = mysqli_insert_id($kon);

    $query_user = mysqli_query($kon, "INSERT INTO user values ('',$last_id_masyarakat_pelapor,'$username','$password','$level_user')");
}

// star my script
if ($query) {
    echo "<script>
    alert('Data Berhasil Disimpan');
    document.location.href ='../web/data_pelapor.php';
    </script>
    "; 
}
else {
    echo "<script>
    alert('Data Gagal disimpan');
    document.location.href ='../web/data_pelapor.php';
    </script>
    ";
}
// end my script
