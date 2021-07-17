<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Belajar Php</title>
</head>

<body>
<?php
//	Pertemuan 2 - PHP Dasar
//	Sintaks PHP
//		
//	Standart Output
//	echo, print
//	print_r
//	var_dump
//	echo "Galih Anggoro Prasetya";

//<!--
//Penulisan sintaks PHP
//	 1. PHP di dalam HTML
//	 2. HTML di dalam PHP
//-->
//<h1>Halo, selamat datang //<?php echo $nama1</h2>

//	Variabel dan tipe data
// variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
	

	//Operator
	//Aritmatika
	// + = * / %
//	$x = 10;
//	$y = 20;
//	echo $x*$y;

	//Penggabung string / concatenation // concat
	//.
	
//	$nama_depan = "Galih";
//	$nama_belakang = "Anggoro Prasetya";
//	echo $nama_depan . " " . $nama_belakang;
//	

	//Assignment
	// =, +=, -=, *=, /=, %=, .=
//	$x = 1;
//	$x -= 5;
//	echo $x;
//	 
//	$nama = "Galih";
//	$nama .= " ";
//	$nama .= "Anggoro Prasetya";
//	echo $nama;
	
	//Perbandingan
	//<, >, <=, >=, ==, !=
//	var_dump(1==="1");
	
	//Identitas
	//===, !==
//	var_dump(1==="1");
	
	//Logika
	//&&, ||, !
//	$x = 30;
//	var_dump($x <20 || $x % 2==0);
	
	//Pengkondisian
	$a=4;
	$b=9;
	if($a>$b){
		echo("a lebih besar dari pada b");
	}else if($a<$b){
		echo("a lebih kecil dari pada b");
	}else{
		echo("tidak ada nilai ");
	}
	?>
	<br>
	<br>
	<?php
	for($a=0; $a<10; $a++){
		echo($a);
	}
	?>
</body>
</html>




