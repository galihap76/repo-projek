<?php
require 'functions2.php';
$karyawan = query("SELECT * FROM karyawan");

// tombol cari ditekan
if(isset($_POST["cari"])){
	$karyawan = cari ($_POST["keyword"]);
}


?>





<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>Halaman Karyawan</title>
</head>

<body>
<h1>Daftar Karyawan</h1>
<a href="tambah2.php">Tambah Data Karyawan</a>
<br><br>
<form action="" method="post">
	<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
	<button type="submit" name="cari">Cari!</button>
</form>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Nama</th>
		<th>Umur</th>
		<th>Gender</th>
		<th>Pekerjaan</th>
		<th>Agama</th>
		<th>Tempat Tinggal</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach($karyawan as $row) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah2.php?id=<?php echo $row["id"]; ?>">ubah</a> 
			<a href="hapus2.php?id=<?php echo $row["id"];?>" onClick="return confirm('yakin?');">hapus</a>
		</td>
		<td><?php echo $row["nama"]; ?></td>
		<td><?php echo $row["umur"]; ?></td>
		<td><?php echo $row["gender"]; ?></td>
		<td><?php echo $row["pekerjaan"]; ?></td>
		<td><?php echo $row["agama"]; ?></td>
		<td><?php echo $row["tempat_tinggal"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table>
</body>
</html>
