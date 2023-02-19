<?php

// mengkoneksikan ke database
include 'koneksi.php';

// menangkap data yand diambil dari form
$id = $_POST['id'];
$nama_user = $_POST['name'];
$password = $_POST['password'];
$role = $_POST['role'];

// update data ke database
mysqli_query($koneksi, "UPDATE user SET name='$nama_user', password='$password', role='$role' WHERE id='$id'");

// mengarahkan ke halaman_admin.php
header("location:halaman_admin.php");