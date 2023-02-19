<?php

// mengkoneksikan ke database
include 'koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM wisata WHERE id='$id'");

// mengalihkan halaman kemabali ke halaman_editor.php
header("location:halaman_editor.php");

?>