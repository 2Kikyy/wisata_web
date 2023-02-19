<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Indonesia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body__index">
    
    <section class="header__index">
        <h2 class="h2__index">Wisata Indonesia</h2>
        <a href="login_admin_editor.php">Login sebagai admin atau editor</a>
        <br/>
        <br/>
    </section>

    <div class="header_fixed__index">
        <table border="0" class="table__index">
            <tr>
                <th>No.</th>
                <th>Nama Wisata</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM wisata");
            while($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++ . "."; ?></td>
                    <td><?php echo $d['name'];?></td>
                    <td><?php echo $d['description']; ?></td>
                    <td><img src="data:image/jpeg;base64,<?=base64_encode($d['img'])?>" width="100px"></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</body>
</html>