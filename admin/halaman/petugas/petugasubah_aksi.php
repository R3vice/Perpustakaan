<?php
include("../../../koneksi.php");

if(isset($_POST['tombolubah'])) {
    $idpetugas = $_POST['idpetugas'];
    $namapetugas = $_POST['namapetugas'];
    $username = $_POST['username'];
    $hp = $_POST['hp'];

    if($password != $cpassword) {
        echo "<script>alert('Password dan Confirm Password tidak cocok!');</script>";
        header('Location: ../../index.php?page=petugastambah');
        exit();
    }

    $sql = "UPDATE tbl_petugas SET namapetugas='$namapetugas', username='$username', hp='$hp' WHERE idpetugas='$idpetugas'";
    $query = mysqli_query($conn, $sql);

    if($query) {
    echo "<script>alert('Data Berhasil di ubah');</script>";
    header('Location: ../../index.php?page=petugas');
    } else {
    echo "<script>alert('Data Gagal di ubah');</script>";    
    header('Location: ../../index.php?page=petugas');
    }
} else {
    die("Akses dilarang...");
}

?>