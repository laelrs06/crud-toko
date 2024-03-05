<?php 
session_start();
// koneksi database
include '../koneksi.php';
 
if (isset($_POST['submit'])) {
	// menangkap data yang di kirim dari form
	$id_produk = $_POST['id_produk'];
	$nama_produk = $_POST['nama_produk'];
	$tgl_produksi = $_POST['tgl_produksi'];
	$tgl_kadaluarsa = $_POST['tgl_kadaluarsa'];
	$komposisi = $_POST['komposisi'];
	$alamat_produksi = $_POST['alamat_produksi'];
	$username = $_SESSION['username'];

	$result = mysqli_query($koneksi,"SELECT id_karyawan FROM karyawan WHERE username = '$username'");
	$user = [];

	while ($d = mysqli_fetch_assoc($result)) {
		$user[] = $d;
	}

	$user_id = $user[0]['id_karyawan'];

	// menginput data ke database
	mysqli_query($koneksi,"insert into produk values('$id_produk','$nama_produk','$tgl_produksi','$tgl_kadaluarsa','$komposisi','$alamat_produksi','$user_id')");
}
 
// mengalihkan halaman kembali ke index.php
header("location:produk.php");
 
?> 
