<?php
include '../functions/kumpulan_fungsi.php';

$kon = koneksi_db();

$nama_masyarakat_pelapor = $_POST['nama_masyarakat_pelapor'];
if (is_array($_FILES)) {
    if (is_uploaded_file($_FILES['no_ktp']['tmp_name'])) {
        $sourcePath2 = $_FILES['no_ktp']['tmp_name'];
        $fotobaru2 = date('dmYHis') . $_FILES['no_ktp']['name'];
        $targetPath2 = "../upload_ktp/" . $fotobaru2;
        move_uploaded_file($sourcePath2, $targetPath2);
        $path_database_gambar_ktp = "upload_ktp/" . $fotobaru2;
    }
}
//$no_ktp = $_POST['no_ktp'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];
$deskripsi = $_POST['deskripsi'];
//$kategori = $_POST['kategori'];

//var_dump($intensitas); die;
//$id_profil = $_POST['id_profil'];

if (is_array($_FILES)) {
    if (is_uploaded_file($_FILES['gambar']['tmp_name'])) {
        $sourcePath2 = $_FILES['gambar']['tmp_name'];
        $fotobaru2 = date('dmYHis') . $_FILES['gambar']['name'];
        $targetPath2 = "../upload/" . $fotobaru2;
        move_uploaded_file($sourcePath2, $targetPath2);
        $path_database_upload = "upload/" . $fotobaru2;
    }
}

$intensitas = $_POST['intensitas'];
if ($intensitas == 'berat') {
    $id_intensitas = 1;
}
else if ($intensitas == 'sedang') {
   $id_intensitas = 2;
}
else { $id_intensitas = 3; 
}
    
$intensitas = mysqli_query($kon, "SELECT * FROM intensitas_kebakaran WHERE id_intensitas = '$id_intensitas'");
$row = mysqli_fetch_assoc($intensitas);
$jumlah = $row['jumlah'];

$pos_id = getIdPosTerdekat($jumlah);

if ($pos_id == null) {
    $status = array(
        'status' => 'Gagal',
        'error' => 'Tidak Ada Armada Tersedia'
    );
    echo json_encode($status);
    die();
}

// Insert into table masyarakat_pelapor
$query = "INSERT INTO masyarakat_pelapor(no_ktp, nama_masyarakat_pelapor, telp, alamat) VALUES("
        . "'".$path_database_gambar_ktp."',"
        . "'".$nama_masyarakat_pelapor."',"
        . "'".$telp."',"
        . "'".$alamat."')";

mysqli_query($kon, $query);

$last_id = mysqli_insert_id($kon);

$query = "INSERT INTO kejadian(id_masyarakat_pelapor, longitude, latitude, deskripsi_kejadian, 
    gambar, id_intensitas, id_pos)  
          VALUES($last_id, $longitude, $latitude, '$deskripsi', '$path_database_upload','$id_intensitas', $pos_id)";

mysqli_query($kon, $query);

$result = mysqli_query($kon, "UPDATE pos SET "
        . "armada = armada + $jumlah, "
        . "armada_max = armada_max - $jumlah "
        . "WHERE id_pos = '$pos_id'");

if ($result) {
    $status  = array( 'status' => 'berhasil' );
    echo json_encode($status);
} else {
    $status = array(
        'status' => 'gagal',
        'error' => mysqli_error($kon)
    );
   echo json_encode($status);
}

function getIdPosTerdekat($jumlah) {
    global $latitude, $longitude;
    $kon = koneksi_db();
    $query = mysqli_query($kon, "SELECT * FROM pos");

    $res = array();
    while ($result = mysqli_fetch_object($query)) {
        $r = new Result($result);
        $r->hitung($latitude, $longitude);
        $res[] = $r;
    }
    
    usort($res, function($a, $b) {
        //var_dump($a->nilai); die;
        return $a->nilai > $b->nilai ? 1 : -1;
        //die;
    });

    $selected_pos_id = null;
    foreach ($res as $r) {
        if ($r->armadaFree >= $jumlah) {
            $selected_pos_id = $r->pos->id_pos;
            break;
        }
    }

    return $selected_pos_id;
}

class Result {

    public $pos;
    public $armadaFree;
    public $nilai;
    private $lat, $lng;

    public function __construct($pos) {
        $this->pos = $pos;
        $this->armadaFree = $pos->armada_max;
        //var_dump($this->armadaFree);die;
        $this->lat = $pos->longitude_pos;
        $this->lng = $pos->latitude_pos;
    }

    public function hitung($latUser, $lngUser) {
        $a = ($latUser - $this->lat) * ($latUser - $this->lat);
        $b = ($lngUser - $this->lng) * ($lngUser - $this->lng);
        $c = $a + $b;
        $this->nilai = sqrt($c);
    }
}