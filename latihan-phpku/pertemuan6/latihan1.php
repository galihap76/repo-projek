<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Latihan 1 PHP</title>
<style>
	.kotak{
		width:30px;
		height:30px;
		background-color:#BADA55;
		text-align:center;
		line-height:30px;
		margin:3px;
		float:left;
		transition: 1s;
	}
	.kotak:hover{
		transform:rotate(360deg);
		border-radius:50%;
	}
</style>
</head>

<body>
<?php
	$angka = [
		[1,2,3],
		[4,5,6],
		[7,8,9]
	];
	?>
	<?php foreach($angka as $a): ?>
	<?php foreach($a as $b): ?>
	<div class="kotak"><?php echo $b; ?></div>
	<?php endforeach;?>
	<div class="clear"></div>
	<?php endforeach; ?>
</body>
</html>








