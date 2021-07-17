<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Daftar Mahasiswa</title>
</head>

<body>
<?php
	$mahasiswa=[
		["Galih Anggoro Prasetya", "043040023", "Teknik Informatika", "g4lihanggoro@gmail.com"],
		["Doddy Ferdiansyah", "033040001", "Teknik Industri", "doddy@yahoo.com"]
		];
	
	?>
	<h1>Daftar Mahasiswa</h1>
	
	<?php foreach($mahasiswa as $mhs):?>
	<ul>
		<li>Nama: <?= $mhs[0]; ?></li>
		<li>NRP : <?= $mhs[1]; ?></li>
		<li>Jurusan : <?= $mhs[2]; ?></li>
		<li>Email : <?= $mhs[3]; ?></li>
	</ul>
	<?php endforeach; ?>
</body>
</html>