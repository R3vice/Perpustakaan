<?php
    //mulai session
    session_start();
    session_unset();
    //hapus session
    session_destroy();

    //alihkan ke halaman login
    header("location:index.php?pesan=logout");
?>