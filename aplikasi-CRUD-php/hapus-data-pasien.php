
<?php
require "database-pasien.php";
$id=$_GET["id"];
if(hapus($id)>0){
	echo "
		<script>
		alert('Data pasien berhasil di hapus!');
		document.location.href='index-pasien.php';
		</script>
		";
}else{
	echo "
		<script>
		alert('Data pasien gagal di hapus!');
		document.location.href='index-pasien.php';
		</script>
		";
}

?>
