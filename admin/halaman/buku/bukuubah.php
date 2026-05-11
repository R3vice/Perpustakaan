<?php
include("../koneksi.php");

$idbuku = $_GET['idbuku'];

$sql = "SELECT * FROM tbl_buku WHERE idbuku='$idbuku'";
$query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
</head>
<body>
    <h3>Edit Buku</h3>
    <form action="halaman/buku/bukuubah_aksi.php" method="post">
        <?php
        while($data = mysqli_fetch_assoc($query)){
        ?>

    <table>
        <tr>
            <td>Kode Buku</td>
            <td><input type="text" name="idbuku" readonly value="<?php echo $data['idbuku'] ?>"></td>
        </tr>

        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul" value="<?php echo $data['judul'] ?>"></td>
        </tr>

        <tr>
            <td>Pengarang</td>
            <td><input type="text" name="pengarang" value="<?php echo $data['pengarang'] ?>"></td>
        </tr>

        <tr>
            <td>Penerbit</td>
            <td><input type="text" name="penerbit" value="<?php echo $data['penerbit'] ?>">
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="tombolubah" value="perbarui"></td>
        </tr>
    </table>
    <?php
        }
    ?>
</form>
</body>
</html>