<?php
include '../koneksi.php';

$query = "SELECT * FROM tbl_buku";
$data = mysqli_query($conn, $query);

?>
<h3>
    <center>Daftar Buku Perpustakaan<center>
</h3>
<h3>
    <center>SMK Negeri 1 Sayung<center>
</h3>
<h5><a href="index.php?page=bukutambah">[+]Tambah Buku</a></h5>

<table  border="1" align="center" >
    <tr>
        <th>No</th>
        <th>id Buku</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Aksi</th>
    </tr>
    
<?php
    $nomor = 1;
    while($row = mysqli_fetch_assoc($data)){
        echo "<tr>";
        echo "<td>".$nomor."</td>";
        echo "<td>".$row['idbuku']."</td>";
        echo "<td>".$row['judul']."</td>";
        echo "<td>".$row['pengarang']."</td>";
        echo "<td>".$row['penerbit']."</td>";
        echo "<td>"  ;
        echo "<a href='../admin/index.php?page=bukuubah&idbuku=".$row['idbuku']."'> Edit </a> |";
        echo "<a href='halaman/buku/bukuhapus.php?idbuku=".$row['idbuku']."'> Delete </a>  ";
        echo "</td>";
        echo "</tr>";

        $nomor++;
    }

?>

</table>