<?php
include '../koneksi.php';

$query = "SELECT * FROM tbl_siswa";
$data = mysqli_query($conn, $query);

?>
<h3>
    <center>Daftar Siswa<center>
</h3>
<h3>
    <center>SMK Negeri 1 Sayung<center>
</h3>
<h5><a href="index.php?page=siswatambah">[+]Tambah Siswa</a></h5>

<table  border="1" align="center" >
    <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Aksi</th>
    </tr>
    
<?php
    $nomor = 1;
    while($row = mysqli_fetch_assoc($data)){
        echo "<tr>";
        echo "<td>".$nomor."</td>";
        echo "<td>".$row['nis']."</td>"; 
        echo "<td>".$row['namasiswa']."</td>";
        echo "<td>".$row['kelas']."</td>";
        echo "<td>".$row['alamat']."</td>";
        echo "<td>".$row['hp']."</td>";
        echo "<td>"  ;
        echo "<a href='../admin/index.php?page=siswaubah&nis=".$row['idsiswa']."'> Edit </a> |";
        echo "<a href='halaman/siswa/siswahapus.php?nis=".$row['idsiswa']."' onclick=\"return confirm('Yakin hapus ".$row['namasiswa']." ?')\"> Delete </a>  ";
        echo "</td>";
        echo "</tr>";

        $nomor++;
    }

?>

</table>