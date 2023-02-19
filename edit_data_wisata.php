<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Wisata</title>
</head>
<body>
    <a href="halaman_editor.php">Kembali</a>
    <br/>

    <h3>Edit Data Wisata</h3>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM wisata WHERE id='$id'");
    while($d = mysqli_fetch_array($data)) {
        ?>
        <form method="post" enctype="multipart/form-data" action="edit_data_wisata_aksi.php">
            <table>
                <tr>
                    <td>Nama Wisata</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="name" value="<?php echo $d['name']; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Deskripsi</td>
                    <td>
                        <input type="text" name="description"
                        value="<?php echo $d['description']; ?>">
                    </td>
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
        <?php
    }
    ?>
</body>
</html>