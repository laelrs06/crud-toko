<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location:../login/index2.php");
    exit(); // Terminate script execution after the redirect
}

// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$tgl_produksi = $_POST['tgl_produksi'];
$tgl_kadaluarsa = $_POST['tgl_kadaluarsa'];
$komposisi = $_POST['komposisi'];
$alamat_produksi = $_POST['alamat_produksi'];
$username = $_SESSION['username'];
// update data ke database
mysqli_query($koneksi,"update produk set nama_produk='$nama_produk', tgl_produksi='$tgl_produksi', tgl_kadaluarsa='$tgl_kadaluarsa', komposisi='$komposisi', alamat_produksi='$alamat_produksi' where id_produk='$id_produk'");

// mengalihkan halaman kembali ke index.php
header("location:../produk/produk.php");
 
?>