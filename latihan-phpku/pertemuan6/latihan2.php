<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Latihan 2 PHP</title>
</head>

<body>
<?php
	//Array Associative
	//definisinya sama seperti array numerik, kecuali
	//key-nya adalah string yang kita buat sendiri
	
	$mahasiswa=[
		[
		"nama" => "Galih Anggoro Prasetya",
		"nrp" => "043040023",
		"email" => "g4lihanggoro@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "bg2.jpg"
	],
		[
		"nama" => "Doddy Ferdiansyah",
		"nrp" => "033040001",
		"email" => "doddy@gmail.com",
		"jurusan" => "Teknik Industri",
//		"tugas" => [90, 80, 100]
		"gambar" => "img1.jpg"
	]
];
//	echo $mahasiswa[1]["tugas"][1];
	?>
<h1>Daftar Mahasiswa</h1>

<?php foreach ($mahasiswa as $mhs): ?>
<ul>
    <li>
	<img src="img/<?= $mhs["gambar"]; ?>">
    </li>
	<li>Nama : <?= $mhs["nama"]; ?></li>
	<li>NRP : <?= $mhs["nrp"]; ?></li>
	<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
	<li>Email : <?= $mhs["email"]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>








