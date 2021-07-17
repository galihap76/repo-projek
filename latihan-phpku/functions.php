<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar"); 
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows=[];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}
?>






<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Halaman Admin</title>
</head>

<body>
</body>
</html>