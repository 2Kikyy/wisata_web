<?php

// mengkoneksikan ke database
include 'koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'");

// mengalihkan ke halaman_admin.php
header("location:halaman_admin.php");