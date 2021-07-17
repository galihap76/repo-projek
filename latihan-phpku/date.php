<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Belajar PHP</title>
</head>

<body>
<?php
	//date
	//untuk menampilkan tanggal dengan format tertentu
//  echo date("l, d-m-y");
//	
	//Time
	//UNIX timestamp / EPOCH time
//	echo time();
//	echo date("l"), time()-60*60*24*100);
	
//	mktime
//	membuat sendiri detik
//	mktime(0,0,0,0,0,0)
	//jam, menit, detik, bulan, tanggal, tahun	
//	echo date("l", mktime(0,0,0,8,25,1985));
	
	//strtotime
//	echo date("l", strtotime("25 aug 1985"));
	
//	function salam($waktu="datang", $nama="admin"){
//		return "selamat $waktu, $nama!";
//	}
	?>
<!--	<h1><?php //echo salam("pagi", "galih"); ?></h1>-->

<?php
	function salam($nama){
		return $nama;
	}
	?>
	<h1><?php echo salam("Good" ." "),  date("l" ." "), salam("Galih"); ?></h1>
	
</body>
</html>