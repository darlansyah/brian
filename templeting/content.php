<?php
$user = null;
$pos = null;
if ($_SESSION['level_user'] == 'admin') {
    $user = " ";
} elseif ($_SESSION['level_user'] == 'petugas') {
    $user = null;
}
?>

<!-- sidebar -->
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="../img/logo/logo.png" alt="" /></a>
            <strong><img src="img/logo/logosn.png" alt="" /></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="#">
                    <li><a title="Dekstop" href="../web/index.php" aria-expanded="false"><i class="fa fa-desktop icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Dekstop</span></a></li>
                    
                    <li class="#">
                        <a class="has-arrow" href="">
                            <i class="fa big-icon fa-bullseye icon-wrap"></i>
                            <span class="mini-click-non">Lapor</span>
                        </a>
<!--                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Identitas Pelapor" href="identitas_pelapor.php"><i class="fa fa-user sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Identitas Pelapor</span></a></li>
                        </ul>-->
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Data Pelapor" href="../web/data_pelapor.php"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Data Pelapor</span></a></li>
                        </ul>
                    </li>
                    <li calss="#">
                        <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-fire-extinguisher icon-wrap"></i> <span class="mini-click-non">Kejadian</span></a>
<!--                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Lapor Kejadian" href="lapor_kejadian.php"><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Lapor Kejadian</span></a></li>
                        </ul>-->
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Data Kejadian" href="../web/data_kejadian.php"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Data Kejadian</span></a></li>
                        </ul>
                    </li>
                    <li calss="#">
                        <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-users icon-wrap"></i> <span class="mini-click-non">Petugas Damkar</span></a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Identitas Pengguna" href="../web/identitas_petugas.php"><i class="fa fa-user sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Identitas Pengguna</span></a></li>
                        </ul>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Data Pengguna" href="../web/data_petugas.php"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Data Pengguna</span></a></li>
                        </ul>
                    </li>
                    <li calss="#">
                        <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-home icon-wrap"></i> <span class="mini-click-non">POS</span></a>
                        <?php
                        if ($_SESSION['level_user'] == 'admin') {
                            ?>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Pos Damkar" href="../web/pos_damkar.php"><i class="fa fa-home sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Pos Damkar</span></a></li>
                            </ul>
                            <?php
                        }
                        ?>

                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Data Pos" href="../web/data_pos.php"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Data Pos</span></a></li>
                        </ul>
                    </li>
                    <li><a title="Landing Page" href="#" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Landing Page</span></a></li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- end sidebar -->

<!-- Start Welcome area -->
<div class="all-content-wrapper">