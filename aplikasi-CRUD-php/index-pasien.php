<?php
//akses pada database pasien
require 'database-pasien.php';
//akses pada file database ke function query
$pasien = query("SELECT * FROM pasien");

// ketika tombol cari ditekan jalankan kondisi ini
if(isset($_POST["cari"])){
	$pasien = cari ($_POST["keyword"]);
}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>Halaman Pasien</title>
	<style>
		.container{
			width:998px;
			border:2px solid gray;
			position: relative;
			left:170px;
			border-radius:15px;
			box-shadow: 1px 1px 5px 0px gray;
			padding-left:7px;
			padding-right:7px;
			text-align:center;
		}
		.heading-one{
			width:350px;
			background-color:orange;
			color:white;
			font-family:Impact, Haettenschweiler, Franklin Gothic Bold, Arial Black," sans-serif";
			font-weight: 100;
			border-radius:15px;
		}
		.link-one{
			width:200px;
			padding:10px;
			background-color:royalblue;
			color:white;
			border-radius:15px;
		}
		.link-one a{
			font-family:Impact, Haettenschweiler, Franklin Gothic Bold, Arial Black," sans-serif";
			text-decoration: none;
			color:white;
		}
		label{
			font-size:25px;
			
		}
		table{
			border:1px solid red;
			margin-bottom: 20px;
			font-size:20px;
	        font-family:Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif;
		}
		.search{
			float: left;
			padding-bottom:10px;
			
		}
	</style>
</head>

<body>
<div class="container">
	<center><h1 class="heading-one">Data Pasien Rawat Inap</h1></center>
<!--Tambah data pasien	-->
<center>
	<div class="link-one">
<a href="tambah-data-pasien.php">Tambah Data Pasien</a>
	</div>
	</center>
<br><br>
<form action="" method="post">
<div class="search">
	<label for="keyword"><strong>Cari Pasien :</strong> </label>
	<input type="text" name="keyword" id="keyword" size="40" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
	<button type="submit" name="cari">Cari!</button>
	</div>
</form>
<br>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No Pasien</th>
		<th>Nama Pasien</th>
		<th>Umur Pasien</th>
		<th>Tempat Tinggal</th>
		<th>Kamar Pasien</th>
		<th>Check In</th>
		<th>Check Out</th>
		<th>Hapus Data Pasien</th>
		<th>Poto Pasien</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach($pasien as $data_pasien) : ?>
	<tr>
	<td><?= $i; ?></td>
		<td><?php echo $data_pasien["nama_pasien"]; ?></td>
		<td><?php echo $data_pasien["umur_pasien"]; ?></td>
		<td><?php echo $data_pasien["tempat_tinggal"]; ?></td>
		<td><?php echo $data_pasien["kamar_pasien"]; ?></td>
		<td><?php echo $data_pasien["check_in"]; ?></td>
		<td><?php echo $data_pasien["check_out"]; ?></td>
		<td>
			<a href="ubah-data-pasien.php?id=<?php echo $data_pasien["id"]; ?>">ubah</a> 
			<a href="hapus-data-pasien.php?id=<?php echo $data_pasien["id"];?>" onClick="return confirm('Apakah anda yakin mau hapus data pasien?');">hapus</a>
		</td>
		<td><img src="img/<?php echo $data_pasien["poto_pasien"]; ?>" width="100"></td>
	</tr>
	
	<?php $i++; ?>
	<?php endforeach; ?>
</table>
	</div>
	<script type="text/javascript">
	let keyword = document.getElementById('keyword');
	let form = document.getElementsByTagName('form')[0];
		form.addEventListener('submit', cekValidasi);
		
		function cekValidasi(e){
		//cek apakah user menekan tombol dan mengisi data kosong?
		if(form.keyword.value===""){
		//jika iya jalankan alert pada javascript
			alert('Maaf pencarian tidak boleh kosong!');
		//gagalkan akses untuk mengirim data submit
			e.preventDefault();
		  }
			return false;
		}
	</script>
</body>
</html>


