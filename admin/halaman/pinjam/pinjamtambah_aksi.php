<?php
include "../../../koneksi.php";

if(isset($_POST['tomboltambah'])){
    $petugas = $_POST['petugas'];
    $siswa = $_POST['siswa'];
    $buku = $_POST['buku'];

    $sql = "INSERT INTO tbl_peminjaman (idpetugas, idsiswa, idbuku)
            VALUE ('$petugas', '$siswa', '$buku')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>alert('Data Berhasil di Simpan');</script>";
        header("Location: ../../index.php?page=pinjam");
    } else {
        echo "<script>alert('Data Gagal di Simpan');</script>";
        header("Location: ../../index.php?page=pinjamtambah");
    }
}
?>