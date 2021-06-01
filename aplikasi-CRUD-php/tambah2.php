<?php
require "functions2.php";

//cek apakah tombol submit sudah di tekan atau belum
if(isset($_POST["submit"])){
	
	
	//cek apakah data berhasil di tambahkan atau tidak
	if(tambah($_POST)>0){
		echo "
		<script>
		alert('Data berhasil di tambahkan!');
		document.location.href='index2.php';
		</script>
		";
	}else{
		echo "
		<script>
		alert('Data gagal di tambahkan!');
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
<title>Tambah Data Karyawan</title>
</head>

<body>
<h1>Tambah Data Karyawan</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama" autocomplete="off" required/>
		</li>
		<li>
			<label for="umur">Umur :</label>
			<input type="text" name="umur" id="umur" autocomplete="off" required/>
		</li>
	    <li>
		    <label for="gender">Gender :</label>
			<input type="text" name="gender" id="gender" autocomplete="off" required/>
		</li>
		<li>
			<label for="tempat_tinggal">Tinggal :</label>
			<input type="text" name="tempat_tinggal" id="tempat_tinggal" autocomplete="off" required/>
		</li>
		<li>
			<label for="pekerjaan">Pekerjaan :</label>
			<input type="text" name="pekerjaan" id="pekerjaan" autocomplete="off" required/>
		</li>
		<li>
		<select name="agama">
			<option>Islam</option>
			<option>Kristen</option>
			<option>Hindu</option>
		</select>
		</li>
		<li>
			<button type="submit" name="submit">Tambah Data Karyawan!</button>
		</li>
	</ul>
</form>
</body>
</html>