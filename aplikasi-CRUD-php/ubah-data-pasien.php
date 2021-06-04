<?php
require "database-pasien.php";

//Ambil data di URL
$id=$_GET["id"];

//query data mahasiswa berdasarkan id
$psn = query("SELECT * FROM pasien WHERE id=$id")[0];



//cek apakah tombol submit sudah di tekan atau belum
if(isset($_POST["submit"])){
	
	
	
	//cek apakah data berhasil diubah atau tidak
	if(ubah($_POST)>0){
		echo "
		<script>
		alert('Data pasien berhasil diubah!');
		document.location.href='index-pasien.php';
		</script>
		";
	}else{
		echo "
		<script>
		alert('Data pasien gagal diubah!');
		document.location.href='index-pasien.php';
		</script>
		";
	}
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Halaman Tambah Pasien</title>
<style>
	@charset "utf-8";
/* CSS Document */
* {
	box-sizing: border-box;
	}

body {
	background-color:greenyellow;
	font-family: 'Open Sans', sans-serif;
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100vh;
	margin: 0;
}

.container {
	background-color: #fff;
	border-radius: 5px;
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
	overflow: hidden;
	width: 400px;
	max-width: 100%;
}

.header {
	border-bottom: 1px solid #f0f0f0;
	background-color: #f7f7f7;
	padding: 20px 40px;
}

.header h2 {
	margin: 0;
}

.form {
	padding: 30px 40px;	
}

.form-control {
	margin-bottom: 10px;
	padding-bottom: 20px;
	position: relative;
}

.form-control label {
	display: inline-block;
	margin-bottom: 5px;
}

.form-control input {
	border: 2px solid #f0f0f0;
	border-radius: 4px;
	display: block;
	font-family: inherit;
	font-size: 14px;
	padding: 10px;
	width: 100%;
}

.form-control input:focus {
	outline: 0;
	border-color: #777;
}
 input:invalid{
	border-color:grey;
    background-color:none;
}
input:valid {
  background-color: #D9FFD9;
  border-color:green;
}
.form button{
	background-color: #6D8BFF;
	border: 2px solid #6D8BFF;
	border-radius: 4px;
	color: #fff;
	display: block;
	font-family: inherit;
	font-size: 16px;
	padding: 10px;
	margin-top: 20px;
	width: 100%;
}

	
	</style>
</head>

<body>
<div class="container">
	<div class="header">
		<h2>Ubah Data Pasien</h2>
	</div>
	<form action="" method="post" class="form" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $psn["id"]; ?>">
	<input type="hidden" name="gambarLama" value="<?php echo $psn["poto_pasien"]; ?>">
		<div class="form-control">
			<label for="nama_pasien">Nama Pasien</label>
			<input type="text" placeholder="Nama Pasien" name="nama_pasien" id="nama_pasien" autocomplete="off" value="<?php echo $psn["nama_pasien"];?>" required/>
		</div>
		<div class="form-control">
			<label for="umur_pasien">Umur Pasien</label>
			<input type="text" placeholder="Umur Pasien" name="umur_pasien" id="umur_pasien" autocomplete="off" value="<?php echo $psn["umur_pasien"]; ?>" required/>
		</div>
		<div class="form-control">
			<label for="tempat_tinggal">Tempat Tinggal</label>
			<input type="text" placeholder="Tempat Tinggal" name="tempat_tinggal" id="tempat_tinggal" autocomplete="off" value="<?php echo $psn["tempat_tinggal"];?>" required/>
		</div>
		<div class="form-control">
			<label for="kamar_pasien">Kamar Pasien</label>
			<input type="text" placeholder="Tempat Tinggal" name="kamar_pasien" id="kamar_pasien" autocomplete="off" value="<?php echo $psn["kamar_pasien"];?>" required/>
		</div>
		<div class="form-control">
			<label for="check_in">Check In</label>
			<input type="text" placeholder="Check In" name="check_in" id="check_in" autocomplete="off" value="<?php echo $psn["check_in"];?>" required/>
		</div>
		<div class="form-control">
			<label for="check_out">Check Out</label>
			<input type="text" placeholder="Check Out" name="check_out" id="check_out" autocomplete="off" value="<?php echo $psn["check_out"];?>" required/>
		</div>
			<label for="poto_pasien">Poto Pasien</label>
			<br>
			<img src="img/<?php echo $psn['poto_pasien']; ?>" width="40"><br>
			<input type="file" name="poto_pasien" id="poto_pasien"/>
		<button type="submit" name="submit">Submit</button>
	</form>
</div>
</body>
</html>