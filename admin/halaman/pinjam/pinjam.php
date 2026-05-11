<?php
include "../koneksi.php";

// $query = "SELECT * FROM tbl_peminjaman";
$query = "SELECT * FROM tbl_peminjaman
        LEFT JOIN tbl_petugas ON tbl_petugas.idpetugas = tbl_peminjaman.idpetugas
        LEFT JOIN tbl_siswa ON tbl_siswa.idsiswa = tbl_peminjaman.idsiswa
        LEFT JOIN tbl_buku ON tbl_buku.idbuku = tbl_peminjaman.idbuku";
        
$data = mysqli_query($conn, $query);

?>
<h3>Daftar Peminjaman</h3>

<h5><a href="index.php?page=pinjamtambah">[+] Tambah Peminjaman</a></h5>

<table border=1 align="center">
    <tr>
        <th>No</th>
        <th>Siswa</th>
        <th>Petugas</th>
        <th>Buku</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
    <?php
    $nomor = 1;
    while($row = mysqli_fetch_assoc($data)) {
        echo "<tr>";
        echo "<td> $nomor </td>";
        echo "<td>". $row['namasiswa'] ."</td>";
        echo "<td>". $row['namapetugas'] ."</td>";
        echo "<td>". $row['judul'] ."</td>";
        echo "<td>". $row['waktupinjam'] ."</td>";
        echo "<td>" ;
        echo "<a href='../admin/index.php?page=pinjamubah&idpinjam=
        ".$row['idpinjam']."'> Edit </a> |";       
        echo "<a href='halaman/pinjam/pinjamhapus.php?idpinjam=
        ".$row['idpinjam']."'>  Delete</a>" ;       
        echo "</td>";
        echo "</tr>";
        $nomor++;
    }
    ?>
</table>