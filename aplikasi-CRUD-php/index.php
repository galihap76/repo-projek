<?php
require 'functions.php';
$pasien = query("SELECT * FROM pasien");


?>





<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>Halaman Pasien</title>
</head>

<body>
<h1>Daftar Pasien</h1>
<a href="tambah.php">Tambah Data Pasien</a>
<br><br>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Nama</th>
		<th>Umur</th>
		<th>Gender</th>
		<th>Tinggal</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach($pasien as $row) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id=<?php echo $row["id"]; ?>">ubah</a> 
			<a href="hapus.php?id=<?php echo $row["id"];?>" onClick="return confirm('yakin?');">hapus</a>
		</td>
		<td><?php echo $row["nama"]; ?></td>
		<td><?php echo $row["umur"]; ?></td>
		<td><?php echo $row["gender"]; ?></td>
		<td><?php echo $row["tinggal"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table>
</body>
</html>
