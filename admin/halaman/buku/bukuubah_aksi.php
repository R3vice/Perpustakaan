<?php
include("../../../koneksi.php");

if(isset($_POST['tombolubah'])) {
    $kode = $_POST['idbuku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];

    $sql = "UPDATE tbl_buku SET idbuku='$kode', judul='$judul', pengarang='$pengarang', penerbit='$penerbit' WHERE idbuku='$kode'";
    $query = mysqli_query($conn, $sql);

    if($query) {
    echo "<script>alert('Data Berhasil di ubah');</script>";
    header('Location: ../../index.php?page=buku');
    } else {
    echo "<script>alert('Data Gagal di ubah');</script>";    
    header('Location: ../../index.php?page=buku');
    }
} else {
    die("Akses dilarang...");
}

?>