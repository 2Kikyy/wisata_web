<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['name'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from user where name='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if($data['role']=="admin") {
        
        // buat session login dan username
        $_SESSION['name'] = $username;
        $_SESSION['role'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:halaman_admin.php");

    // cek jika user login sebagai editor
    } else if($data['role']=="editor") {
        // buat sesion login dan username
        $_SESSION['name'] = $username;
        $_SESSION['role'] = "editor";
        // alihkan ke halaman dashboard editor
        header("location:halaman_editor.php");
    } else {
        // jika tidak ada satupun atau login gagal arahkan ke index.php
        header("location:index.php?pesan=gagal");
    }
} else {
    header("location:index.php?pesan=gagal");
}
?>