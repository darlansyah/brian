<?php

session_start();
$_SESSION = array();
session_unset();
session_destroy();
?>
<script>
    alert('Anda Berhasil Logout!');
    window.location.href = "login.php";
</script>
<?php

exit;
