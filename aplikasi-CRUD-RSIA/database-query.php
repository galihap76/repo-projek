<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "database_rumah_sakit");


//tampilkan data dari database
function query($query){
	global $conn;
	$rows=[];
	$result = mysqli_query($conn, $query);
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

//tambah data pasien
function tambah($data){
 global $conn;
 
$nama = stripslashes(htmlentities($data["nama"], ENT_QUOTES));
$umur = stripslashes(htmlentities($data["umur"], ENT_QUOTES));
$gender = stripslashes(htmlentities($data["gender"], ENT_QUOTES));
$tinggal = stripslashes(htmlentities($data["tinggal"], ENT_QUOTES));
$check_in = stripslashes(htmlentities($data["check_in"], ENT_QUOTES));
$check_out = stripslashes(htmlentities($data["check_out"], ENT_QUOTES));
$kamar = stripslashes(htmlentities($data["kamar"], ENT_QUOTES));
	
	
 $query = "INSERT INTO pasien_rumah_sakit VALUES('', '$nama', '$umur', '$gender', '$tinggal', '$check_in', '$check_out', '$kamar')";
	
mysqli_query($conn, $query);

 return mysqli_affected_rows($conn); 
}

// ubah data pasien
function ubah($data){
	//panggil $conn dari global variabel
	global $conn;
	//ambil data form dari data ubah
	$id=$data["id"];
$nama = stripslashes(htmlentities($data["nama"], ENT_QUOTES));
$umur = stripslashes(htmlentities($data["umur"], ENT_QUOTES));
$gender = stripslashes(htmlentities($data["gender"], ENT_QUOTES));
$tinggal = stripslashes(htmlentities($data["tinggal"], ENT_QUOTES));
$check_in = stripslashes(htmlentities($data["check_in"], ENT_QUOTES));
$check_out = stripslashes(htmlentities($data["check_out"], ENT_QUOTES));
$kamar = stripslashes(htmlentities($data["kamar"], ENT_QUOTES));
	

	$query = "UPDATE pasien_rumah_sakit SET nama='$nama', umur='$umur', gender='$gender', tinggal='$tinggal', check_in='$check_in', check_out='$check_out', kamar='$kamar' WHERE id =$id";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

//hapus data pasien
function hapus($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM pasien_rumah_sakit WHERE id = $id");
		
		return mysqli_affected_rows($conn);
	}

//cari data pasien
function cari($keyword){
	$query = "SELECT * FROM pasien_rumah_sakit WHERE nama LIKE '%$keyword%' OR umur LIKE '%$keyword%' OR gender LIKE '%$keyword%' OR tinggal LIKE '%$keyword%' OR check_in LIKE '%$keyword%' OR check_out LIKE '%$keyword%' OR kamar LIKE '%$keyword%'";
	return query($query);
}

//registrasi 
function registrasi($data){
	global $conn;
	
	$username = stripslashes(mysqli_real_escape_string($conn, $data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	
	//cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user_rumah_sakit WHERE username = '$username'");
	
	if(mysqli_fetch_assoc($result)){
		echo "
		   <script>
		   alert('Username sudah terdaftar!');
		   </script>
		";
		return false;
	}
	
	//cek konfirmasi password
	if($password!==$password2){
		echo "<script>
		 alert('Konfirmasi password tidak sesuai!');
		</script>";
		return false;
	}
	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);
	
	//tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO user_rumah_sakit VALUES('', '$username', '$password')");
	
	return mysqli_affected_rows($conn);
}

//lupa password
function lupaPassword($data){
	global $conn;
	
	$username = stripslashes(mysqli_real_escape_string($conn, $data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	
	//cek konfirmasi password
	if($password!==$password2){
		echo "<script>
		 alert('Konfirmasi password tidak sesuai!');
		</script>";
		return false;
	}
	
	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);
	//ganti password
	mysqli_query($conn, "UPDATE user_rumah_sakit SET password='$password' WHERE username = '$username'");
	return mysqli_affected_rows($conn);
}






//enkripsi URL
//
//function encrypt( $q ) {
//     $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
//     $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
//     return( $qEncoded );
// }
?>