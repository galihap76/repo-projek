
<?php
require "functions-pada-poto.php";
$id=$_GET["id"];
if(hapus($id)>0){
	echo "
		<script>
		alert('Poto berhasil di hapus!');
		document.location.href='membuat-aplikasi-poto-sederhana.php';
		</script>
		";
}else{
	echo "
		<script>
		alert('Poto gagal di hapus!');
		document.location.href='membuat-aplikasi-poto-sederhana.php';
		</script>
		";
}

?>
