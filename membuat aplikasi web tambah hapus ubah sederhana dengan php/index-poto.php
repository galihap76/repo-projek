//Buat database management system nya dulu

<?php
require "functions-pada-poto.php";

$Outputgambar=query("SELECT * FROM gambar");
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Membuat Aplikasi Poto Sederhana</title>
</head>

<body>
	<center><h1>Halaman Poto</h1></center>
	<center>
		<?php foreach($Outputgambar as $row): ?>
		 <img src="img/<?= $row["nama_gambar"]; ?>" width="100">
		<?php endforeach; ?>
	</center>
	<a href="ubah-pada-poto.php?id=<?= $row["id"]; ?>">ubah</a> 
	<a href="hapus-pada-poto.php?id=<?php echo $row["id"];?>" onClick="return confirm('yakin?');">hapus</a>
	<a href="tambah-pada-poto.php">Tambah gambar profil</a>
</body>
</html>
