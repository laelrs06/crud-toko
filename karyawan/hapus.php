<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location:../login/index2.php");
    exit(); // Terminate script execution after the redirect
}

// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_karyawan'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from karyawan where id_karyawan='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:karyawan.php");
 
?>