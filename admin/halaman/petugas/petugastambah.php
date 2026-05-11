<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h3>Tambah petugas</h3>
    <form action="halaman/petugas/petugastambah_aksi.php" method="post">
    <table>
        <tr>
            <td>Nama Petugas</td>
            <td><input type="text" name="namapetugas" placeholder="Masukan Nama Petugas"></td>
        </tr>

        <tr>
            <td>Username</td>
                <td><input type="text" name="username" placeholder="Masukan Nama petugas"></td>
            </tr>

        <tr>
            <td>No HP</td>
            <td><input type="text" name="hp" placeholder="Masukan No HP"></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="text" name="pass" placeholder="Masukan Password"></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td><input type="text" name="cpass" placeholder="Masukan Password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="tomboltambah" value="Tambah"></td>
        </tr>
    </table>
</form>
</body>
</html>