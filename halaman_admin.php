<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['role']=="") {
        header("location:index.php?pesan=gagal");
    }

    ?>
    <h1>Selamat datang admin</h1>

    <p>
        Halo <b><?php echo $_SESSION['name']; ?></b>
        Anda telah login sebagai
        <b><?php echo $_SESSION['role']; ?></b>
    </p>

    <h2>Data Editor</h2>
    <a href="tambah_editor.php">Tambah Editor</a>
    <br/>
    <br/>

    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama User</th>
            <th>Password</th>
            <th>Role/Level</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM user");
        while($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++ . "."; ?></td>
                <td><?php echo $d['name'];?></td>
                <td><?php echo $d['password']; ?></td>
                <td><?php echo $d['role'] ?></td>
                <td>
                    <a href="edit_data_editor.php?id=<?php echo $d['id']; ?>">Edit</a>
                    <a href="hapus_data_editor.php?id=<?php echo $d['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

    <a href="logout.php">Logout</a>
</body>
</html>