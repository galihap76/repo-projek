<?php
require "functions-pada-poto.php";

//cek apakah tombol submit sudah di tekan atau belum
if(isset($_POST["submit"])){
	
	
	//cek apakah data berhasil di tambahkan atau tidak
	if(tambah($_POST)>0){
		echo "
		<script>
		alert('Poto berhasil di tambahkan!');
		document.location.href='membuat-aplikasi-poto-sederhana.php';
		</script>
		";
	}else{
		echo "
		<script>
		alert('Poto gagal di tambahkan!');
		document.location.href='membuat-aplikasi-poto-sederhana.php';
		</script>
		";
	}
}
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tambah Poto Anda</title>
</head>

<body>
<h1>Tambah Poto Anda</h1>
<form action="" method="post" enctype="multipart/form-data">
	<ul>
		<li>
			<label for="Cekgambar">Gambar :</label>
			<input type="file" name="Cekgambar" id="Cekgambar">
		</li>
		<li>
			<button type="submit" name="submit">Tambah Poto!</button>
		</li>
	</ul>
</form>
</body>
</html>