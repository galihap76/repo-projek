<?php
require "functions2.php";
$id=$_GET["id"];
if(hapus($id)>0){
	echo "
		<script>
		alert('Data berhasil di hapus!');
		document.location.href='index2.php';
		</script>
		";
}else{
	echo "
		<script>
		alert('Data gagal di hapus!');
		document.location.href='index2.php';
		</script>
		";
}

?>