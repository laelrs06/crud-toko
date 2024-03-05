<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location:../login/index2.php");
    exit(); // Terminate script execution after the redirect
}
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>tokobunda</title>
		<link rel="stylesheet" type="text/css" href="../css/style3.css">
	</head>
	<body>
	 	<?php
		include '../koneksi.php';
		$id_produk = $_GET['id_produk'];
		$data = mysqli_query($koneksi,"select * from produk where id_produk='$id_produk'");
		while($d = mysqli_fetch_array($data)){
			?>
			<div class="kotak_login">
	     	<center><h3>EDIT DATA PRODUK </h3></center>
			<form method="post" action="update.php">
				<label>ID PRODUK</label>
				<input type="number" name="id_produk" class="form_login" placeholder="masukkan id produk anda" value="<?php echo $d['id_produk']; ?>">
	 
				<label>NAMA PRODUK</label>
				<input type="text" name="nama_produk" class="form_login" placeholder="masukkan nama produk anda" value="<?php echo $d['nama_produk']; ?>">
	            
	            <label>TANGGAL PRODUKSI</label>
				<input type="date" name="tgl_produksi" class="form_login" placeholder="masukkan tanggal produksi " value="<?php echo $d['tgl_produksi']; ?>">

				<label>TANGGAL KADALUARSA</label>
				<input type="date" name="tgl_kadaluarsa" class="form_login" placeholder="masukkan tanggal kadaluarsa" value="<?php echo $d['tgl_kadaluarsa'];?>">

				<label>KOMPOSISI</label>
				<input type="text" name="komposisi" class="form_login" placeholder="masukkan komposisi " value="<?php echo $d['komposisi'];?>">

				<label>ALAMAT PRODUKSI</label>
				<input type="text" name="alamat_produksi" class="form_login" placeholder="masukkan alamat produksi anda" value="<?php echo $d['alamat_produksi'];?>">
	 
				<input type="submit" class="tombol_login" value="SIMPAN">
	 
				<br/>
				<br/>
				<center>
					<a class="link" href="../index.php">KEMBALI</a>
				</center>
			</form></div>
			<?php 
		}
		?>
	</body>
	</html>