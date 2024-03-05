
<!DOCTYPE html>
<html>
<head>
	<title>tambah data produk</title>
	<link rel="stylesheet" type="text/css" href="../css/style3.css">
</head>
<body>

<div class="kotak_login">
	<p class="tulisan_login">Tambah Data Produk</p>
 
	<form method="POST" action="tambah_aksi.php">
		<label>ID PRODUK</label>
		<input type="text" name="id_produk" class="form_login" placeholder="id atau email ..">
 		<label>NAMA PRODUK</label>
		<input type="text" name="nama_produk" class="form_login" placeholder="nama..">
		<label>TANGGAL PRODUKSI</label>
		<input type="date" name="tgl_produksi" class="form_login" placeholder="tanggal..">
		<label>TANGGAL KADALUARSA</label>
		<input type="date" name="tgl_kadaluarsa" class="form_login" placeholder="tanggal..">
		<label>KOMPOSISI</label>
		<input type="text" name="komposisi" class="form_login" placeholder="komposisi..">
		<label>ALAMAT PRODUKSI</label>
		<input type="text" name="alamat_produksi" class="form_login" placeholder="alamat..">
 		<input type="submit" name="submit" class="tombol_login" value="SIMPAN">
		<br/>
		<br/>
		<center>
			
			<a class="link" href="../produk/produk.php">KEMBALI</a>
		</center>
	</form>
	
</div>
</body>
</html>
