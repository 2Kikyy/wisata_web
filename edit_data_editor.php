<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Editor</title>
</head>
<body>
    <h2>Edit Data Editor</h2>
    <br/>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
    while($d = mysqli_fetch_array($data)) {
        ?>
        <form method="post" action="edit_data_editor_aksi.php">
            <table>
                <tr>
                    <td>Nama User</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="name" value="<?php echo $d['name']; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>
                        <input type="text" name="password" value="<?php echo $d['password']; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Role/Level</td>
                    <td>
                        <input type="text" name="role" value="<?php echo $d['role']; ?>">
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