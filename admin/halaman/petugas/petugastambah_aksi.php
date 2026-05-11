<?php
include("../../../koneksi.php");

if(isset($_POST['tomboltambah'])) {
    $namapetugas = $_POST['namapetugas'];
    $username = $_POST['username'];
    $hp = $_POST['hp'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];

    if($password != $cpassword) {
        echo "<script>alert('Password dan Confirm Password tidak cocok!');</script>";
        header('Location: ../../index.php?page=petugastambah');
        exit();
    }

    $sql = "INSERT INTO tbl_petugas (namapetugas, username, hp, password) VALUES ('$namapetugas', '$username', '$hp', '$password')";
    $query = mysqli_query($conn, $sql);

    if($query) {
        header('Location: ../../index.php?page=petugas');
    } else {
        header('Location: ../../index.php?page=petugastambah');
    }
} else {
    die("Akses dilarang...");
}

?>