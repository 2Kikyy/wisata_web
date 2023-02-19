<?php
// koneksikan ke database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$name = $_POST['name'];
$password = $_POST['password'];
$role = $_POST['role'];

// input data ke database
mysqli_query($koneksi, "INSERT INTO user VALUES('', '$name', '$password', '$role')");

// mengalihkan halaman kembali ke admin.php
header("location:halaman_admin.php");
?>