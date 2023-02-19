<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Wisata</title>
</head>
<body>
    <h2>Tambah Data Wisata</h2>

    <form method="post" enctype="multipart/form-data" action="tambah_data_wisata_aksi.php">
        <table>
            <tr>
                <td>Nama Wisata</td>
                <td><input type="text" name="name"></td>
            </tr>

            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="description"></td>
            </tr>

            <tr>
                <td>Gambar</td>
                <td>
                    <input type="file" name="img">
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>