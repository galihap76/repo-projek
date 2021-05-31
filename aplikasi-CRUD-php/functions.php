<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "databasepasien"); 
function query($query){
	global $conn;
	//eksekusi database dan perintahkan untuk CRUD
	$result = mysqli_query($conn, $query);
	//tampung data database dalam bentuk rapih 
	$rows=[];
	//panggil, ambil, dan tampilkan data dari database
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	//hubungkan database ke global 
	global $conn;
	//dapatkan data dari form tambah data
	$nama=htmlspecialchars($data["nama"]);
	$umur=htmlspecialchars($data["umur"]);
	$gender=htmlspecialchars($data["gender"]);
	$tinggal=htmlspecialchars($data["tinggal"]);
	

	$query = "INSERT INTO pasien VALUES('', '$nama', '$umur', '$gender', '$tinggal')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
	
}

function hapus($id){
	//hubungkan database ke global
		global $conn;
	//dapatkan data dari aksi link hapus dan hapus data dari database
		mysqli_query($conn, "DELETE FROM pasien WHERE id = $id");
		
		return mysqli_affected_rows($conn);
	}

function ubah($data){
	//hubungkan database ke global
	global $conn;
	//dapatkan data dari form ubah data
	$id=$data["id"];
	$nama=htmlspecialchars($data["nama"]);
	$umur=htmlspecialchars($data["umur"]);
	$gender=htmlspecialchars($data["gender"]);
	$tinggal=htmlspecialchars($data["tinggal"]);
	

	$query = "UPDATE pasien SET nama='$nama', umur= '$umur', gender='$gender', tinggal='$tinggal' WHERE id =$id";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
?>






