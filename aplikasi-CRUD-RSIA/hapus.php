<?php
session_start();

include_once "database-query.php";

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
$id= abs((int)$_GET["id"];
         
   //cek apakah data berhasil di hapus atau tidak
if(hapus($id)>0){
	echo "
		<script>
		alert('Data berhasil di hapus!');
		document.location.href='data-pasien.php';
		</script>
		";
}else{
	echo "
		<script>
		alert('Data gagal di hapus!');
		document.location.href='data-pasien.php';
		</script>
		";
}