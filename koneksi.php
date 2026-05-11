<?php
    $server       = "localhost";
    $user         = "root";
    $pass         = "";
    $database     = "perpuspplg1";

    $conn=mysqli_connect($server,$user,$pass,$database);
    if (!$conn) {
        die("Koneksi Gagal: " . mysqli_connect_error());
    }
?>