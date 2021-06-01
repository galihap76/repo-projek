<?php
//koneksi kan database
$conn = mysqli_connect("localhost", "root", "", "database_gambar");

function query($query){
	//panggil database dari global
	global $conn;
	//perintah kan SQL untuk menyambungkan READ pada server mysql
	$result= mysqli_query($conn, $query);
	//rampihkan dalam pemanggilan data dari database
	$rows=[];
	//ambil data dari database
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	//kembalikan jumlah data yang di ambil dari database
	return $rows;
}

function tambah($data){
	//panggil database dari global
	global $conn;
	//Upload pada gambar 
	$gambarForm=upload();
	if(!$gambarForm){
		return false;
	}
	//eksekusi gambar jika pada function upload berhasil
	$query="INSERT INTO gambar VALUES ('', '$gambarForm')";
	//query dan perintahkan syntax SQL
	mysqli_query($conn, $query);
	//kembalikan pengaruhnya baris pada MYSQL
	return mysqli_affected_rows($conn);
	
}

function upload(){
	//ambil data pada inputan name form type file
	$namaFile=$_FILES["Cekgambar"]["name"];
	$ukuranFile=$_FILES["Cekgambar"]["size"];
	$error=$_FILES["Cekgambar"]["error"];
	$tmpName=$_FILES["Cekgambar"]["tmp_name"];
	
	//cek apakah tidak ada gambar yang di upload
	if($error===4){
		echo "<script>
		alert('pilih gambar terlebih dahulu!');
		</script>";
			return false;
	}
	
	//cek apakah yang di upload adalah gambar
	$ekstensiGambarValid=['jpg', 'jpeg', 'png'];
	//pecah kan string menjadi bagian array
	$ekstensiGambar=explode('.', $namaFile);
	//abaikan pada string UPPERCASE
	$ekstensiGambar=strtolower(end($ekstensiGambar));
	//temukan string di dalam array jika berhasil eksekusi dan upload jika gagal eksekusi echo pada alert javascript
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
		echo "<script>
		alert('yang anda upload bukan gambar!');
		</script>";
		
		return false;
	}
	
	//aktifkan pada validasi ukuran gambar
	
//	cek jika ukurannya terlalu besar
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

function ubah($data){
	//panggil database dari global
	global $conn;
	
	$id=$data["id"];
	//panggil data dari form name gambarLama
	$gambarLama=htmlentities($data["gambarLama"]);
	
	//cek apakah user pilih gambar baru atau tidak
	if($_FILES['Cekgambar']['error']===4){
		$gambarForm=$gambarLama;
	}else{
		$gambarForm = upload();
	}
	
    //eksekusi update pada data gambar dari database
	$query = "UPDATE gambar SET nama_gambar='$gambarForm' WHERE id =$id";
	//query dan perintahkan syntax SQL
	mysqli_query($conn,$query);
	//kembalikan pengaruhnya baris pada MYSQL
	return mysqli_affected_rows($conn);
}

function hapus($id){
	//panggil data dari database dari global
	global $conn;
	
	mysqli_query($conn, "DELETE FROM gambar WHERE id=$id");
	return mysqli_affected_rows($conn);
}

?>