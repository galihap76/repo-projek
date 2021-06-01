<?php
require "functions2.php";

//Ambil data di URL
$id=$_GET["id"];

//query data mahasiswa berdasarkan id
$karyawan = query("SELECT * FROM karyawan WHERE id=$id")[0];



//cek apakah tombol submit sudah di tekan atau belum
if(isset($_POST["submit"])){
	
	
	//cek apakah data berhasil diubah atau tidak
	if(ubah($_POST)>0){
		echo "
		<script>
		alert('Data berhasil diubah!');
		document.location.href='index2.php';
		</script>
		";
	}else{
		echo "
		<script>
		alert('Data gagal diubah!');
		document.location.href='index2.php';
		</script>
		";
	}
}
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ubah Data Karyawan</title>
</head>

<body>
<h1>Ubah Data Karyawan</h1>
<form action="" method="post">
	<input type="hidden" name="id" value="<?= $karyawan["id"]; ?>"/>
	<ul>
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama" autocomplete="off" required value="<?= $karyawan["nama"]; ?>"/>
		</li>
		<li>
			<label for="umur">Umur :</label>
			<input type="text" name="umur" id="umur" autocomplete="off" required value="<?= $karyawan["umur"]; ?>"/>
		</li>
	    <li>
		    <label for="gender">Gender :</label>
			<input type="text" name="gender" id="gender" autocomplete="off" required value="<?= $karyawan["gender"]; ?> "/>
		</li>
		<li>
			<label for="tempat_tinggal">Tinggal  :</label>
			<input type="text" name="tempat_tinggal" id="tempat_tinggal" required autocomplete="off" value="<?= $karyawan["tempat_tinggal"]; ?>"/>
		</li>
		<li>
			<label for="pekerjaan">Pekerjaan :</label>
			<input type="text" name="pekerjaan" id="pekerjaan" autocomplete="off" required value="<?=$karyawan["pekerjaan"]; ?>"/>
		</li>
		<li>
		<select name="agama" value="<?=$karyawan["agama"]; ?>">
			<option>Islam</option>
			<option>Kristen</option>
			<option>Hindu</option>
		</select>
		</li>
		<li>
			<button type="submit" name="submit">Ubah Data Karyawan!</button>
		</li>
	</ul>
</form>
</body>
</html>