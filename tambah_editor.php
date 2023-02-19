<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Editor</title>
</head>
<body>
    <a href="halaman_admin.php">Kembali</a>
    <br/>
    <br/>
    <h3>Tambah Data Editor</h3>
    <form action="tambah_editor_aksi.php" method="post">
        <table>
            <tr>
                <td>Nama User</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Role/Peran</td>
                <td><input type="text" name="role"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>