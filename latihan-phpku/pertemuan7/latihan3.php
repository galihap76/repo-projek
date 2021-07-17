<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Latihan 3</title>
</head>

<body>
<?php
	if(isset($_POST["submit"])): ?>
	<h1>Halo, selamat datang <?= $_POST["submit"]; ?></h1>
	<?php endif; ?>
<form action="latihan4.php" method="post">
	Masukkan nama :
	<input type="text" name="nama">
	<br>
	<button type="submit" name="submit">Kirim!</button>
</form>
</body>
</html>