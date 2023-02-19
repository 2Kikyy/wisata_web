<?php
// koneksikan ke database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama_wisata = $_POST['name'];
$deskripsi = $_POST['description'];
$file_gambar = addslashes(file_get_contents($_FILES['img']['tmp_name']));

// update data ke database
mysqli_query($koneksi, "UPDATE wisata SET name='$nama_wisata', description='$deskripsi', img='$file_gambar' WHERE id='$id'");

// mengalihkan halaman kembali ke halaman_editor.php
header("location:halaman_editor.php");

?>