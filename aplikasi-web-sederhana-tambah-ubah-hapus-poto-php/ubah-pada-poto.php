<?php
require "functions-pada-poto.php";

//Ambil data di URL
$id=$_GET["id"];

//query data poto atau gambar berdasarkan id
$gbr = query("SELECT * FROM gambar WHERE id=$id")[0];



//cek apakah tombol submit sudah di tekan atau belum
if(isset($_POST["submit"])){
	
	
	
	//cek apakah data berhasil diubah atau tidak
	if(ubah($_POST)>0){
		echo "
		<script>
		alert('Poto berhasil diubah!');
		document.location.href='membuat-aplikasi-poto-sederhana.php';
		</script>
		";
	}else{
		echo "
		<script>
		alert('Poto tidak ada yang diubah!');
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
<title>Ubah Poto Gambar</title>
</head>

<body>
<h1>Ubah Poto Gambar</h1>
<form action="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?= $gbr["id"]; ?>">
	<input type="hidden" name="gambarLama" value="<?= $gbr["nama_gambar"]; ?>">
		<li>
			<label for="Cekgambar">Gambar :</label><br>
			<img src="img/<?= $gbr['nama_gambar']; ?>" width="40"><br>
			<input type="file" name="Cekgambar" id="Cekgambar">
		</li>
		<li>
			<button type="submit" name="submit">Ubah Poto!</button>
		</li>
	</ul>
</form>
</body>
</html>
