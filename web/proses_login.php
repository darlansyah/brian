<?php

session_start();

include '../functions/kumpulan_fungsi.php';
$kon = koneksi_db();

$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : null;
$pass = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;

echo "usernm : $username pass : $pass";
$quser = mysqli_query($kon, "select * from admin where username = '$username', password ='$pass and name ='$name'");
if (mysqli_num_rows($quser)) {
    $_SESSION['sudah_login'] = TRUE;
    ?>
    <script>
        alert('Anda Berhasil Masuk!');
        window.location.href = "index.php";
    </script>
    <?php

} else {
    ?>
    <script>
        alert('Anda Gagal Masuk!');
        window.location.href = "login.php";
    </script>
    <?php

}

$result = mysqli_query($kon, "SELECT * FROM admin WHERE username  = '$username' AND password = '$pass'");
$result_pelapor = mysqli_query($kon, "SELECT * FROM masyarakat_pelapor where username = '$username' AND pass = '$pass'");

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_object($result);
    $_SESSION['sudah_login'] = TRUE;
    $_SESSION['level_user'] = $row->level_user;
    header('location:index.php');
} else if (mysqli_num_rows($result_pelapor) === 1) {
    $row = mysqli_fetch_object($result);
    $_SESSION['sudah_login'] = TRUE;
    $_SESSION['level_user'] = 'pelapor';
    header('location:lapor_kejadian.php');
} else {
    echo "gagal";
}
?>