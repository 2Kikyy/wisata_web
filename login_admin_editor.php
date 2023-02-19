<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RizWisata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body__login">
    <h1 class="h1__login">Login multiuser RizWisata</h1>

    <?php
    if(isset($_GET['pesan'])) {
        if($_GET['pesan']=="gagal") {
            echo "<div class='alert__login'>Username dan password tidak sesuai! </div>";
        }
    }
    ?>

    <div class="kotak_login">
        <p class="tulisan_login">Silahkan login</p>

        <form action="cek_login.php" method="post">
            <label class="label__login">Username</label>
            <input type="text" name="name" class="form_login" placeholder="Username.." required="required">

            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password.." required="required">
            <input type="submit" class="tombol_login" value="LOGIN">

            <br/>
            <br/>
            <br/>
            <center>
                <a href="https://www.google.com" class="link">Kembali</a>
            </center>
        </form>
    </div>
</body>
</html>