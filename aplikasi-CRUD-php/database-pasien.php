<?php
//koneksi database
  $conn = mysqli_connect("localhost", "root", "", "databasepasien");

//cek apakah gagal terhubung
if( !$conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

//panggil data dari database
function query($query){
	//panggil variabel global $conn
	global $conn;
	//rapihkan data untuk pemanggilan database
	$tampung_data=[];
	//perintahkan SQL untuk melakukan CRUD
	$result=mysqli_query($conn, $query);
	//panggil dan ambil data dari database
	while($data_pasien = mysqli_fetch_assoc($result)){
		$tampung_data[]=$data_pasien;
	}
	return $tampung_data;
}

//panggil data dari form tambah data pasien
function tambah($data){
	//panggil variabel global $conn
	global $conn;
	
	//dapatkan data dari form tambah data pasien
	$nama_pasien=htmlentities($data["nama_pasien"]);
	$umur_pasien=htmlentities($data["umur_pasien"]);
	$tempat_tinggal=htmlentities($data["tempat_tinggal"]);
	$kamar_pasien=htmlentities($data["kamar_pasien"]);
	$check_in=htmlentities($data["check_in"]);
	$check_out=htmlentities($data["check_out"]);
	
	//upload gambar
	$poto_pasien=upload();
	if(!$poto_pasien){
		return false;
	}
	
    //insert data dari database
	$query = "INSERT INTO pasien VALUES('', '$nama_pasien', '$umur_pasien', '$tempat_tinggal', '$kamar_pasien', '$check_in', '$check_out', '$poto_pasien')";
	//perintahkan SQL untuk CRUD
	mysqli_query($conn,$query);
	//kembalikan jumlah pengaruhnya rows database
	return mysqli_affected_rows($conn);
}
//panggil dan buat data untuk upload
function upload(){
	$namaFile=$_FILES["poto_pasien"]["name"];
	$ukuranFile=$_FILES["poto_pasien"]["size"];
	$error=$_FILES["poto_pasien"]["error"];
	$tmpName=$_FILES["poto_pasien"]["tmp_name"];
	
	//cek apakah tidak ada gambar yang di upload
	if($error===4){
		echo "<script>
		alert('pilih poto pasien terlebih dahulu!');
		</script>";
			return false;
	}
	
	//cek apakah yang di upload adalah gambar
	$ekstensiGambarValid=['jpg', 'jpeg', 'png'];
	$ekstensiGambar=explode('.', $namaFile);
	$ekstensiGambar=strtolower(end($ekstensiGambar));
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
		echo "<script>
		alert('yang anda upload bukan poto!');
		</script>";
		
		return false;
	}
	
	//aktifkan jika ingin validasi gambar
	//cek jika ukurannya terlalu besar
	
//	if($ukuranFile > 1000000){
//		echo "<script>
//		alert('ukuran gambar terlalu besar!');
//		</script>";
//		return false;
//	}
	
	//lolos pengecekan, gambar siap diupload
	//generate nama gambar baru
	$namaFileBaru=uniqid();
	$namaFileBaru.='.';
	$namaFileBaru.=$ekstensiGambar;
	
	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
	
	return $namaFileBaru;
}

//panggil data dari form ubah data pasien
function ubah($data){
	//panggil $conn dari global variabel
	global $conn;
	//ambil data form dari data ubah
	$id=$data["id"];
	$nama_pasien=htmlentities($data["nama_pasien"]);
	$umur_pasien=htmlentities($data["umur_pasien"]);
	$tempat_tinggal=htmlentities($data["tempat_tinggal"]);
	$kamar_pasien=htmlentities($data["kamar_pasien"]);
	$check_in=htmlentities($data["check_in"]);
	$check_out=htmlentities($data["check_out"]);
	$gambarLama=htmlentities($data["gambarLama"]);
	
	//cek apakah user pilih gambar baru atau tidak
	if($_FILES["poto_pasien"]['error']===4){
		$poto_pasien = $gambarLama;
		echo "<script>
		  alert('Tidak ada poto yang di upload.');
		</script>";
	}else{
		$poto_pasien = upload();
	}
	

	$query = "UPDATE pasien SET nama_pasien='$nama_pasien', umur_pasien='$umur_pasien', tempat_tinggal='$tempat_tinggal', kamar_pasien='$kamar_pasien', check_in='$check_in', check_out='$check_out', poto_pasien='$poto_pasien' WHERE id =$id";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

function hapus($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM pasien WHERE id = $id");
		
		return mysqli_affected_rows($conn);
	}

function cari($keyword){
	$query = "SELECT * FROM pasien WHERE nama_pasien LIKE '%$keyword%' OR umur_pasien LIKE '%$keyword%' OR tempat_tinggal LIKE '%$keyword%' OR kamar_pasien LIKE '%$keyword%' OR check_in LIKE '%$keyword%' OR check_out LIKE '%$keyword%'";
	return query($query);
}

?>






