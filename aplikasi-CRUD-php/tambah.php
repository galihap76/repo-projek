<?php
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
<title>Tambah Data Pasien</title>
</head>

<body>
<h1>Tambah Data Pasien</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama" required autocomplete="off"/>
		</li>
		<li>
			<label for="umur">Umur :</label>
			<input type="text" name="umur" id="umur" required autocomplete="off"/>
		</li>
	    <li>
		    <label for="gender">Gender :</label>
			<input type="text" name="gender" id="gender" required autocomplete="off"/>
		</li>
		<li>
			<label for="tinggal">Tinggal :</label>
			<input type="text" name="tinggal" id="tinggal" required autocomplete="off"/>
		</li>
		<li>
			<button type="submit" name="submit">Tambah Data Pasien!</button>
		</li>
	</ul>
</form>
</body>
</html>