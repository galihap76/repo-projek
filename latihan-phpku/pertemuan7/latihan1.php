<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Latihan 1</title>
</head>

<body>
<?php
	//variable scope / lingkup variabel
	
//	$x =10;
//	function tampilX(){
//		global $x;
//		echo $x;
//	}
//	tampilX();
	
	?>
	
	<?php
	//SUPERGLOBALS
	// variable global milik PHP
	// merupakan associative array
	
//	echo $_SERVER["SERVER NAME"];
	?>
	<?php
	//GET
//	$_GET["nama"] = "Galih Anggoro Prasetya";
//	$_GET["nrp"] = "043040023";
//	var_dump($_GET);
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
		"gambar" => "img1.jpg"
	]
];
	?>
	
	<h1>Daftar Mahasiswa</h1>
	<?php foreach($mahasiswa as $mhs): ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
	<?php endforeach; ?>
</body>
</html>










