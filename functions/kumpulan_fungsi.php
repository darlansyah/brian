<?php

function koneksi_db() {
    $koneksi = mysqli_connect("localhost", "root", '', 'pemadamkebakaran');
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
        return $koneksi;
    }
}

function flash($name = '', $message = '', $class = 'alert alert-success alert-dismissible fade show') {
    //We can only do something if the name isn't empty
    if (!empty($name)) {
        //No message, create it
        if (!empty($message) and empty($_SESSION[$name])) {
            if (!empty($_SESSION[$name])) {
                unset($_SESSION[$name]);
            }
            if (!empty($_SESSION[$name . '_class'])) {
                unset($_SESSION[$name . '_class']);
            }

            $_SESSION[$name] = $message;
            $_SESSION[$name . '_class'] = $class;
        }
        //Message exists, display it
        elseif (!empty($_SESSION[$name]) && empty($message)) {
            $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : 'success';
            echo '
                <div class="' . $class . '">
                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                        </button>
                        <span>
                            ' . $_SESSION[$name] . '</span>
                    </div>
                ';
            unset($_SESSION[$name]);
            unset($_SESSION[$name . '_class']);
        }
    }
}

function authentication() {
    if (empty($_SESSION['sudah_login'])) {
        ?>
        <script>
            alert('Anda Belum Melakukan Login!');
            window.location.href = "login.php";
        </script>
        <?php

        exit;
    }
}
?>