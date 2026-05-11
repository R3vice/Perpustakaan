<?php
    //mulai session
    session_start();

    //koneksi ke database
    include "koneksi.php";

    //ambil data dari form login
    $username=$_POST['user'];
    $password=$_POST['password'];

    //query dari tabel petugas
    $ambildata=mysqli_query($conn,"SELECT * from tbl_petugas 
    WHERE username='$username' AND password='$password'");
    
    //cek data
    $cek=mysqli_num_rows($ambildata);
    if($cek>0)
    {
        $_SESSION['username']=$username;
        $_SESSION['status']='login';
        header("location:admin/index.php");
    }
    else
    {
        header("location:index.php?pesan=gagal");
    }
?> 