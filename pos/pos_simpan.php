<?php
//var_dump($_POST);
//die;
//session_start();
require '../functions/kumpulan_fungsi.php';
//authentication();
$kon = koneksi_db();

$id_pos = isset($_REQUEST['id_pos']) ? $_REQUEST['id_pos'] : 0;
$nama_pos = isset($_REQUEST['nama_pos']) ? $_REQUEST['nama_pos'] : 0;
$alamat_pos = isset($_REQUEST['alamat_pos']) ? $_REQUEST['alamat_pos'] : '';
$longitude_pos = isset($_REQUEST['longitude_pos']) ? $_REQUEST['longitude_pos'] : '';
$latitude_pos = isset($_REQUEST['latitude_pos']) ? $_REQUEST['latitude_pos'] : '';

//echo "$id_pos // $nama_pos // $alamat_pos // $longatitude_pos // $latitude_pos";
//
//exit;

if ($id_pos != 0) {
    $query = mysqli_query($kon, "UPDATE pos SET nama_pos='$nama_pos',
                                                 alamat_pos = '$alamat_pos',
                                                 longitude_pos = '$longitude_pos',
                                                 latitude_pos = '$latitude_pos'
                                                 WHERE id_pos = '$id_pos'");
} else {
    $query = mysqli_query($kon, "INSERT INTO pos values ('','$nama_pos','$alamat_pos','$longitude_pos','$latitude_pos')");
}

// star my script
if ($query) {
    echo "<script>
    alert('Data Berasil Masuk');
   document.location.href ='../web/data_pos.php';
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
           