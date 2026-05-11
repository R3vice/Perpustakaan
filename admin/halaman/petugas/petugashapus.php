<?php
include("../../../koneksi.php");

    $idpetugas = $_GET['idpetugas'];

    $sql = "DELETE FROM tbl_petugas WHERE idpetugas='$idpetugas'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: ../../index.php?page=petugas');  
    } else {
        die("Gagal menghapus data.");
    }
?>  