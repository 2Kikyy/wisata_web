<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor</title>
</head>
<body>
    
    <?php
    session_start();
    
    // cek apakah user yang masuk halaman ini sudah login
    if($_SESSION['role']=="") {
        header("location:index.php?pesan=gagal");
    }
    ?>

    <h1>Halaman Editor</h1>

    <p>
        Halo, <b><?php echo $_SESSION['name']; ?></b>
        Anda telah login sebagai <b><?php echo $_SESSION['role'];?></b>
    </p>
    <a href="tambah_data_wisata.php">Tambah Data Wisata</a>

    <br/>
    <br/>

    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama Wisata</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM wisata");
        while($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++ . "."; ?></td>
                <td><?php echo $d['name']; ?></td>
                <td><?php echo $d['description']; ?></td>
                <td><img src="data:image/jpeg;base64,<?=base64_encode($d['img'])?>" width="100px"></td>
                <td>
                    <a href="edit_data_wisata.php?id=<?php echo $d['id']; ?>">Edit</a>
                    <a href="hapus_data_wisata.php?id=<?php echo $d['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

    <br/>
    <a href="logout.php">Logout</a>
</body>
</html>