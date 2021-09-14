<?php
include_once "../database-query.php";

//pagination
//konfigurasi
$jumlahDataPerhalaman = 10;
$jumlahData = count(query("SELECT * FROM pasien_rumah_sakit"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = (isset($_GET["halaman"])) ? (int)$_GET["halaman"]: 1;
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

$cari_pasien = $_GET["cari-pasien"];
$query = "SELECT * FROM pasien_rumah_sakit WHERE nama LIKE '%$cari_pasien%' OR umur LIKE '%$cari_pasien%' OR gender LIKE '%$cari_pasien%' OR tinggal LIKE '%$cari_pasien%' OR check_in LIKE '%$cari_pasien%' OR check_out LIKE '%$cari_pasien%' OR kamar LIKE '%$cari_pasien%' LIMIT $awalData, $jumlahDataPerhalaman";
$pasien = query($query);


?>
 

 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					
                                        <thead>
                                            <tr>
                                                <th>No Pasien</th>
                                                <th>Nama Pasien</th>
                                                <th>Umur Pasien</th>
                                                <th>Gender Pasien</th>                               
                                                <th>Pasien Tinggal</th>
                                                <th>Check In</th>
                                                <th>Check Out</th>
                                                <th>Kamar Pasien</th>
 						                        <th>Aksi</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
											<?php $i = 1; ?>
											<?php foreach($pasien as $row) : ?>
                                            <tr>
											<td><?= $i; ?></td>
                                           <td><?php echo $row["nama"]; ?></td>
                                                <td><?php echo $row["umur"]; ?></td>
										<td><?php echo $row["gender"]; ?></td>
										<td><?php echo $row["tinggal"]; ?></td>
										<td><?php echo $row["check_in"]; ?></td>
										<td><?php echo $row["check_out"]; ?></td>
										<td><?php echo $row["kamar"]; ?></td>
										<td>	
								<a href="ubah.php?id=<?php echo $row["id"]; ?>">ubah</a>			
								<a href="hapus.php?id=<?php echo $row["id"];?>" onClick="return confirm('Apakah anda yakin?');">hapus</a>
								</td>
                                            </tr>
                                           <?php $i++; ?>
					   <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    
          
                                                          
                                    

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