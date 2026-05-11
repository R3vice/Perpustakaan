<?php
include '../koneksi.php';

$query = "SELECT * FROM tbl_petugas";
$data = mysqli_query($conn, $query);

?>
<h3>
    <center>Daftar petugas<center>
</h3>
<h3>
    <center>SMK Negeri 1 Sayung<center>
</h3>
<h5><a href="index.php?page=petugastambah">[+]Tambah petugas</a></h5>

<table  border="1" align="center" >
    <tr>
        <th>No</th>
        <th>Nama Petugas</th>
        <th>Username</th>
        <th>No HP</th>
        <th>Aksi</th>
    </tr>
    
<?php
    $nomor = 1;
    while($row = mysqli_fetch_assoc($data)){
        echo "<tr>";
        echo "<td>".$nomor."</td>";
        echo "<td>".$row['namapetugas']."</td>"; 
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['hp']."</td>";
        echo "<td>"  ;
        echo "<a href='../admin/index.php?page=petugasubah&idpetugas=" .$row['idpetugas']."'> Edit </a> |";
        echo "<a href='halaman/petugas/petugashapus.php?idpetugas=" .$row['idpetugas']."' onclick=\"return confirm('Yakin hapus ".$row['idpetugas']." ?')\"> Delete </a>  ";
        echo "</td>";
        echo "</tr>";

        $nomor++;
    }

?>

</table>