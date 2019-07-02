<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();
?>
<script>
    alert('Anda Berhasil Logout!');
    window.location.href = "login.php";
</script>
<?php

exit;
