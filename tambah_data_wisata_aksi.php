<?php
// koneksikan ke database
include 'koneksi.php';

// menangkap data yang dikirm dari form
$nama_wisata = $_POST['name'];
$deskripsi = $_POST['description'];
$file_gambar = addslashes(file_get_contents($_FILES['img']['tmp_name']));

// input data ke database
mysqli_query($koneksi, "INSERT INTO wisata VALUES('', '$nama_wisata', '$deskripsi', '$file_gambar')");

// mengalihkan halaman kembali ke halaman_editor.php
header("location:halaman_editor.php");
?>