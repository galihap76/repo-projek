<?php
session_start();

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

require "functions.php";

//cek apakah tombol submit sudah di tekan atau belum
if(isset($_POST["submit"])){
	
	
	//cek apakah data berhasil di tambahkan atau tidak
	if(tambah($_POST)>0){
		echo "
		<script>
		alert('Data berhasil di tambahkan!');
		document.location.href='index.php';
		</script>
		";
	}else{
		echo "
		<script>
		alert('Data gagal di tambahkan!');
		document.location.href='index.php';
		</script>
		";
	}
}
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tambah Data Mahasiswa</title>
</head>

<body>
<h1>Tambah Data Mahasiswa</h1>
<form action="" method="post" enctype="multipart/form-data">
	<ul>
		<li>
			<label for="nrp">NRP :</label>
			<input type="text" name="nrp" id="nrp">
		</li>
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama">
		</li>
	    <li>
		    <label for="email">Email :</label>
			<input type="text" name="email" id="email" required/>
		</li>
		<li>
			<label for="jurusan">Jurusan :</label>
			<input type="text" name="jurusan" id="jurusan">
		</li>
		<li>
			<label for="gambar">Gambar :</label>
			<input type="file" name="gambar" id="gambar">
		</li>
		<li>
			<button type="submit" name="submit">Tambah Data!</button>
		</li>
	</ul>
</form>
</body>
</html>