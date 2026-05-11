<?php
include("../../../koneksi.php");

if (isset($_GET['nis'])) {
    $kode = $_GET['nis'];

    $sql = "DELETE FROM tbl_siswa WHERE idsiswa='$kode'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: ../../index.php?page=buku');  
    } else {
        die("Gagal menghapus data.");
    }
} else {
    echo "Kode barang tidak ditemukan.";
}

?>  