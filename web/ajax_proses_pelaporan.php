<?php
include '../functions/kumpulan_fungsi.php';

$conn = koneksi_db();

//$longitude = $_GET['longitude'];
//$latitude = $_GET['latitude'];
//$deskripsi = $_GET['deskripsi'];
//$id_profil = $_GET['id_profil'];

$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];
$deskripsi = $_POST['deskripsi'];
$id_profil = $_POST['id_profil'];

if (is_array($_FILES)) {
    if (is_uploaded_file($_FILES['gambar']['tmp_name'])) {

        $sourcePath2 = $_FILES['gambar']['tmp_name'];
        $fotobaru2 = date('dmYHis') . $_FILES['gambar']['name'];
        $targetPath2 = "../upload/" . $fotobaru2;
        move_uploaded_file($sourcePath2, $targetPath2);
        $path_database = "upload/" . $fotobaru2;
    }
}

$pos_id = getIdPosTerdekat();

if ($pos_id == null) {
    $status = array(
        'status' => 'gagal',
        'error' => 'Tidak ada armada tersedia'
    );
    echo json_encode($status);
    die();
}

$query = "INSERT INTO kejadian(id_masyarakat_pelapor, longitude, latitude, deskripsi_kejadian, gambar, id_pos)  
          VALUES($id_profil, $longitude, $latitude, '$deskripsi', '$path_database', $pos_id)";

mysqli_query($conn, "UPDATE pos SET armada = armada + 1 WHERE id_pos = '$pos_id'");

if (mysqli_query($conn, $query)) {
    $status  = array( 'status' => 'berhasil' );
    echo json_encode($status);
} else {
    $status = array(
        'status' => 'gagal',
        'error' => mysqli_error($conn)
    );
   echo json_encode($status);
}

function getIdPosTerdekat() {
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
        return $a->nilai > $b->nilai ? 1 : -1;
    });

    $selected_pos_id = null;
    foreach ($res as $r) {
        if ($r->armadaFree > 0) {
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
        $this->armadaFree = $pos->armada_max - $pos->armada;
        $this->lat = $pos->latitude_pos;
        $this->lng = $pos->longitude_pos;
    }

    public function hitung($latUser, $lngUser) {
        $a = ($latUser - $this->lat) * ($latUser - $this->lat);
        $b = ($lngUser - $this->lng) * ($lngUser - $this->lng);
        $c = $a + $b;
        $this->nilai = sqrt($c);
    }
}