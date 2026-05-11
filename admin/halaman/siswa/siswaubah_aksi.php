<?php
include("../../../koneksi.php");

if(isset($_POST['tombolubah'])) {
    $idsiswa = $_POST['idsiswa'];
    $NIS= $_POST['nis'];
    $nama = $_POST['namasiswa'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];

    $sql = "UPDATE tbl_siswa SET  namasiswa='$nama', kelas='$kelas', alamat='$alamat', hp='$hp' WHERE idsiswa='$idsiswa'";
    $query = mysqli_query($conn, $sql);

    if($query) {
    echo "<script>alert('Data Berhasil di ubah');</script>";
    header('Location: ../../index.php?page=siswa');
    } else {
    echo "<script>alert('Data Gagal di ubah');</script>";    
    header('Location: ../../index.php?page=siswa');
    }
} else {
    die("Akses dilarang...");
}

?>