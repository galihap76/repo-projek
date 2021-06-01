<?php
//Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "datakaryawan");
if( !$conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}


function query($query){
	global $conn;
	//eksekusi database dan perintahkan untuk CRUD
	$result = mysqli_query($conn, $query);
	//tampung data database dalam bentuk rapih 
	$rows=[];
	//panggil, ambil, dan tampilkan data dari database
	while($row = mysqli_fetch_assoc($result)){
		$rows[]=$row;
	}
	return $rows;
}

function tambah($data){
	//hubungkan database ke global 
	global $conn;
	//dapatkan data dari form tambah data
	$nama=htmlentities($data["nama"]);
	$umur=htmlentities($data["umur"]);
	$gender=htmlentities($data["gender"]);
	$pekerjaan=htmlentities($data["pekerjaan"]);
	$tempatTinggal=htmlentities($data["tempat_tinggal"]);
	$agama=htmlentities($data["agama"]);
	

	$query = "INSERT INTO karyawan VALUES('', '$nama', '$umur', '$gender', '$pekerjaan', '$tempatTinggal', '$agama')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
	
}

function ubah($data){
	//hubungkan database ke global
	global $conn;
	//dapatkan data dari form ubah data
	$id=$data["id"];
	$nama=htmlentities($data["nama"]);
	$umur=htmlentities($data["umur"]);
	$gender=htmlentities($data["gender"]);
	$pekerjaan=htmlentities($data["pekerjaan"]);
	$tempatTinggal=htmlentities($data["tempat_tinggal"]);
	$agama=htmlentities($data["agama"]);
	
	$query="UPDATE karyawan SET nama='$nama', umur='$umur', gender='$gender', pekerjaan='$pekerjaan', tempat_tinggal='$tempatTinggal', agama='$agama' WHERE id=$id";
	
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);
}

function hapus($id){
	//hubungkan database ke global
	global $conn;
	//dapatkan data dari aksi link hapus dan hapus data dari database
	$query="DELETE FROM karyawan WHERE id=$id";
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);
}

function cari($keyword){
	//cari untuk mempermudah pencarian data dalam database
	$query = "SELECT * FROM karyawan WHERE nama LIKE '%$keyword%' OR umur LIKE '%$keyword%' OR gender LIKE '%$keyword%' OR pekerjaan LIKE '%$keyword%' OR tempat_tinggal LIKE '%$keyword%' OR agama LIKE '%$keyword%'";
	return query($query);
}
?>