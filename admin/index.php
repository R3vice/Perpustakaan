<?php
    //mulai session
    session_start();
    //cek status sudah login
    if($_SESSION['status']!="login")
    {
        header("location:../index.php?pesan=belum_login");
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Perpustakaan | SMK Negeri 1 SAyung</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body>
        <div>
            <div class="kepala">
                <img src="../images/images.jpg" height="100%" width="100%">
            </div>

            <div class="menu">
                <ul class="list_menu">
                    <li><a href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=buku">Data Buku</a></li>
                    <li><a href="index.php?page=siswa">Siswa</a></li>
                    <li><a href="index.php?page=pinjam">Peminjaman</a></li>
                    <li><a href="index.php?page=petugas">Petugas</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>

            <div>
                <div class="sisikiri">
                    <h2>Visi</h2>
                    <p>
                        "Terwujudnya Indonesia Cerdas Melalui Gemar Membaca Dengan Memberdayakan Perpustakaan"
                    <p>
                    <p>
                    <h2>Misi</h2>
                    <ol>
                        <li>Terwujudnya layanan prima</li>
                        <li>Terwujudnya perpustakaan sebagai pelestari khazanah budaya bangsa</li>
                        <li>Terwujudnya perpustakaan sesuai standar nasional perpustakaan</li>
                    </ol>
                </div>

                <div class="konten">
                    <?php
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];

                            switch ($page) {
                                case 'home':
                                    include "halaman/home.php";
                                    break;
                                case 'buku':
                                    include "halaman/buku/buku.php";
                                    break;
                                case 'bukutambah':
                                    include "halaman/buku/bukutambah.php";
                                    break;
                                case 'bukuubah':
                                    include "halaman/buku/bukuubah.php";
                                    break;
                                    
                                    case 'siswa':
                                    include "halaman/siswa/siswa.php";
                                    break;
                                case 'siswatambah':
                                    include "halaman/siswa/siswatambah.php";
                                    break;
                                case 'siswaubah':
                                    include "halaman/siswa/siswaubah.php";
                                    break;

                                 case 'petugas':
                                        include "halaman/petugas/petugas.php";
                                        break;
                                case 'petugastambah':
                                    include "halaman/petugas/petugastambah.php";
                                    break;
                                case 'petugasubah':
                                    include "halaman/petugas/petugasubah.php";
                                    break;

                                 case 'pinjam':
                                    include "halaman/pinjam/pinjam.php";
                                        break;
                                case 'pinjamtambah':
                                    include "halaman/pinjam/pinjamtambah.php";
                                    break;
                                case 'pinjamubah':
                                    include "halaman/pinjam/pinjamubah.php";
                                    break;


                                default:
                                    echo "<center><h3>Maaf. Halaman tidak ditemukan !</h3></center>";
                                    break;
                            }
                        } else {
                            include "halaman/home.php";
                        }
                    ?>
                </div>
            </div>

            <div class="kaki">
                Copyright | SMK Negeri 1 SAyung
            </div>
        </div>
    </body>
</html>   