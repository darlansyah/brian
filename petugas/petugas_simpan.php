<?php

//var_dump($_POST);
//die;
//session_start();
require '../functions/kumpulan_fungsi.php';
//authentication();
$kon = koneksi_db();

$id_petugas = isset($_REQUEST['id_petugas']) ? $_REQUEST['id_petugas'] : 0;
$no_induk_pegawai = isset($_REQUEST['no_induk_pegawai']) ? $_REQUEST['no_induk_pegawai'] : 0;
$nama_petugas = isset($_REQUEST['nama_petugas']) ? $_REQUEST['nama_petugas'] : '';
$id_pos = isset($_REQUEST['id_pos']) ? $_REQUEST['id_pos'] : '';

if ($id_petugas != 0) {
    $query = mysqli_query($kon, "UPDATE petugas SET id_pos = '$id_pos',
                                                 no_induk_pegawai = '$no_induk_pegawai',
                                                 nama_petugas = '$nama_petugas' where
                                                 id_petugas = '$id_petugas'");
} else {
    $query = mysqli_query($kon, "INSERT INTO petugas values ('','$no_induk_pegawai','$nama_petugas','$id_pos')");
}

// star my script
if ($query) {
    echo "<script>
    alert('Data Berasil Masuk');
    document.location.href ='../web/data_petugas.php';
    </script>
    ";
    // header('location:index.php?konten=masyarakat_pelapor_tambah');
}
// end my script
//
// if ($query) {
//    flash('kejadian', '<b> Success - </b>Data berhasil disimpan...', 'alert alert-bordered alert-success');
        //  echo "
        //    <script>
        //      window.location.href='index.php?konten=kejadian';
        // </script>
        //";
//} else {
        //  flash('kejadian', '<b> Fail - </b>Data gagal disimpan...', 'alert alert-bordered alert-danger');
        //echo"
        //  <script>
        //    window.location.href='index.php?konten=kejadian';
        // </script>
        //";
//}
//
           