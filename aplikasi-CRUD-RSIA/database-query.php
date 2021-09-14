<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "database_rumah_sakit");


//tampilkan data pasien rumah sakit dari database
function query($query){
    //ambil objek global
	global $conn;
    //buat array kosong
	$rows=[];
    //hasil untuk menyiapkan looping
	$result = mysqli_query($conn, $query);
    //selama data dari database ter ambil dari variabel $result
	while($row = mysqli_fetch_assoc($result)){
        //simpan data dalam variabel $row
		$rows[] = $row;
	}
    //kembalikan nilai data
	return $rows;
}

//tampilkan data dashboard
function queryDashboard($queryDashboard){
    //ambil objek global
	global $conn;
    //buat array kosong
	$rows=[];
    //hasil untuk menyiapkan looping
	$result = mysqli_query($conn, $queryDashboard);
     //selama data dari database ter ambil dari variabel $result
	while($row = mysqli_fetch_assoc($result)){
        //simpan data dalam variabel $row
		$rows[] = $row;
	}
     //kembalikan nilai data
	return $rows;
}


//tambah data pasien
function tambah($data){
    //ambil objek global
 global $conn;
    //ambil data dari form tambah
$nama = stripslashes(htmlentities($data["nama"], ENT_QUOTES));
$umur = stripslashes(htmlentities($data["umur"], ENT_QUOTES));
$gender = stripslashes(htmlentities($data["gender"], ENT_QUOTES));
$tinggal = stripslashes(htmlentities($data["tinggal"], ENT_QUOTES));
$check_in = stripslashes(htmlentities($data["check_in"], ENT_QUOTES));
$check_out = stripslashes(htmlentities($data["check_out"], ENT_QUOTES));
$kamar = stripslashes(htmlentities($data["kamar"], ENT_QUOTES));
	//siapkan variabel $query dalam penambahan data dari database
 $query = "INSERT INTO pasien_rumah_sakit VALUES('', '$nama', '$umur', '$gender', '$tinggal', '$check_in', '$check_out', '$kamar')";  
    //siapkan INSERT untuk database dalam fungsi mysqli_query
mysqli_query($conn, $query);
 //cek apakah ada data dari database yang tertambahkan, hapus, ubah atau kembalikan jumlah pengaruhnya tabel dari database  
 return mysqli_affected_rows($conn);
}

// ubah data pasien
function ubah($data){
     //ambil objek global
	global $conn;
	//ambil id data form dari data ubah
	$id=$data["id"];
     //ambil data dari form ubah
$nama = stripslashes(htmlentities($data["nama"], ENT_QUOTES));
$umur = stripslashes(htmlentities($data["umur"], ENT_QUOTES));
$gender = stripslashes(htmlentities($data["gender"], ENT_QUOTES));
$tinggal = stripslashes(htmlentities($data["tinggal"], ENT_QUOTES));
$check_in = stripslashes(htmlentities($data["check_in"], ENT_QUOTES));
$check_out = stripslashes(htmlentities($data["check_out"], ENT_QUOTES));
$kamar = stripslashes(htmlentities($data["kamar"], ENT_QUOTES));
    //siapkan variabel $query dalam ubah data dari database
	$query = "UPDATE pasien_rumah_sakit SET nama='$nama', umur='$umur', gender='$gender', tinggal='$tinggal', check_in='$check_in', check_out='$check_out', kamar='$kamar' WHERE id =$id";  
    //siapkan UPDATE untuk database dalam fungsi mysqli_query
	mysqli_query($conn,$query);  
    //cek apakah ada data dari database yang tertambahkan, hapus, ubah atau kembalikan jumlah pengaruhnya tabel dari database  
	return mysqli_affected_rows($conn);
}

//hapus data pasien
function hapus($id){
        //ambil objek global
		global $conn;
        //siapkan DELETE untuk database dalam fungsi mysqli_query
		mysqli_query($conn, "DELETE FROM pasien_rumah_sakit WHERE id = $id");
		 //cek apakah ada data dari database yang tertambahkan, hapus, ubah atau kembalikan jumlah pengaruhnya tabel dari database  
		return mysqli_affected_rows($conn);
	}

//cari data pasien
//function cari($keyword){
//	$query = "SELECT * FROM pasien_rumah_sakit WHERE nama LIKE '%$keyword%' OR umur LIKE '%$keyword%' OR gender LIKE '%$keyword%' OR tinggal LIKE '%$keyword%' OR check_in LIKE '%$keyword%' OR check_out LIKE '%$keyword%' OR kamar LIKE '%$keyword%'";
//	return query($query);
//}

//registrasi 
function registrasi($data){
    //ambil objek global
	global $conn;
	 //ambil data dari form registrasi
	$username = stripslashes(mysqli_real_escape_string($conn, $data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	
	//cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user_rumah_sakit WHERE username = '$username'");
	
    //pengambilan data dari database dalam fungsi mysqli_fetch_asscoc untuk mengecek username
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
     //cek apakah ada data dari database yang tertambahkan, hapus, ubah atau kembalikan jumlah pengaruhnya tabel dari database  	
	return mysqli_affected_rows($conn);
}

//lupa password
function lupaPassword($data){
    //ambil objek global
	global $conn;
	 //ambil data dari form lupa password
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
     //cek apakah ada data dari database yang tertambahkan, hapus, ubah atau kembalikan jumlah pengaruhnya tabel dari database  
	return mysqli_affected_rows($conn);
}

?>