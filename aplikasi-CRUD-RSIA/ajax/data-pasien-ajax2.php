<?php
include_once "../database-query.php";

$pasien2 = query($query);


//pagination
//konfigurasi
$jumlahDataPerhalaman = 10;
$jumlahData = count(query("SELECT * FROM pasien_rumah_sakit"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = (isset($_GET["halaman"])) ? (int)$_GET["halaman"]: 1;
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;
 
  //tampilkan data pasien
  $pasien2 = query("SELECT * FROM pasien_rumah_sakit LIMIT $awalData, $jumlahDataPerhalaman");

?>


                              <nav aria-label="...">
			  <ul class="pagination">
				<li class="page-item">
			  <?php if($halamanAktif > 1) : ?>
			  			  <a class="page-link" href="?halaman=<?php echo $halamanAktif -1; ?>">&laquo;</a>
				<?php endif; ?>
				</li>
				<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
				<?php if($i == $halamanAktif) : ?>
				<li class="page-item active"><a class="page-link" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<li class="page-item" aria-current="page">
			  <?php else : ?>
			     <a class="page-link" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
			     <?php endif; ?>
			     <?php endfor; ?>
				</li>
				<?php if($halamanAktif < $jumlahHalaman) : ?>
				<li class="page-item"><a class="page-link" href="?halaman=<?php echo $halamanAktif +1; ?>">&raquo;</a></li>
				<?php endif; ?>
			  </ul>
			</nav>