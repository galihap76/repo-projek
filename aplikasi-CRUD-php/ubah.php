<?php
require "functions.php";

//Ambil data di URL
$id=$_GET["id"];

//query data pasien berdasarkan id
$psn = query("SELECT * FROM pasien WHERE id=$id")[0];



//cek apakah tombol submit sudah di tekan atau belum
if(isset($_POST["submit"])){
	
	
	//cek apakah data berhasil diubah atau tidak
	if(ubah($_POST)>0){
		echo "
		<script>
		alert('Data berhasil diubah!');
		document.location.href='index.php';
		</script>
		";
	}else{
		echo "
		<script>
		alert('Data gagal diubah!');
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
<title>Ubah Data Pasien</title>
</head>

<body>
<h1>Ubah Data Pasien</h1>
<form action="" method="post">
	<input type="hidden" name="id" value="<?= $psn["id"]; ?>"/>
	<ul>
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama" required value="<?= $psn["nama"]; ?>"/>
		</li>
		<li>
			<label for="umur">Umur :</label>
			<input type="text" name="umur" id="umur" value="<?= $psn["umur"]; ?>"/>
		</li>
	    <li>
		    <label for="gender">Gender :</label>
			<input type="text" name="gender" id="gender" required value="<?= $psn["gender"]; ?> "/>
		</li>
		<li>
			<label for="tinggal">Tinggal  :</label>
			<input type="text" name="tinggal" id="tinggal" value="<?= $psn["tinggal"]; ?>"/>
		</li>
		<li>
			<button type="submit" name="submit">Ubah Data Pasien!</button>
		</li>
	</ul>
</form>
</body>
</html>