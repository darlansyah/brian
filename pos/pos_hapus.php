<?php

//session_start();
require '../functions/kumpulan_fungsi.php';
//authentication();
$id_pos = $_GET['id'];
//var_dump($id_pos);
//die;
$kon = koneksi_db();

//$id_pelapor= isset($_REQUEST['id_pos']) ? $_REQUEST['id_pos'] : 0;

$result_pos = mysqli_query($kon, "SELECT * FROM `pos` INNER JOIN petugas ON pos.id_pos = petugas.id_pos WHERE pos.id_pos = $id_pos ");

$jumlah_pos = mysqli_num_rows($result_pos);

if ($jumlah_pos > 0) {
    echo "data tidak bisa di hapus, karena pos ini memiliki petugas berjumlah ".$jumlah_pos."<br/>";
    echo "untuk menghapusnya silakan hapus nama petugas yang saling berelasi dengan pos ini ";
    ?>
<a href="../web/data_petugas.php"> Lihat di sini</a>
<?php
    exit();
}


$query=  mysqli_query($kon,"DELETE FROM pos WHERE id_pos='$id_pos'");



if ($query) {
    flash('pos', '<b> Success - </b>Data berhasil dihapus...', 'alert alert-bordered alert-success');
    echo "
        <script>
            alert('Data Berhasil Dihapus');
            window.location.href='../web/data_pos.php';
        </script>
    ";
} else {
    flash('pos', '<b> Fail - </b>Data gagal dihapus...', 'alert alert-bordered alert-danger');
    echo"
        <script>
            alert('Data Gagal Dihapus');
            window.location.href='../web/data_pos.php';
        </script>
    ";
}