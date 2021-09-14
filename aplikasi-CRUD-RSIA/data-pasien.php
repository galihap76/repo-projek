<?php
session_start();

include_once "database-query.php";


if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

 //tampilkan data pasien
  $pasien = query("SELECT * FROM pasien_rumah_sakit");

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Pasien</title>
        <link href="styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <style>
			.judul-projek{
				color:white;
				margin-left:9px;
			}
			.potoku img{
				display:block;
				width:110px;
				margin-left:20px;
				border-radius:24px;
			}
            .link-aksi-ubah{
                background-color: darkorange;
                color:white;
                padding:3px;
            }
            .link-aksi-hapus{
                background-color:red;
                color:white;
                padding:3px;
            }
            .link-aksi-hapus:hover , .link-aksi-ubah:hover{
                text-decoration: none;
                color:white;
            }
            th, .nomor-urut{
                text-align: center;
            }
		</style>     
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
              <h4 class="judul-projek">Sistem Informasi Rumah Sakit</h4>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
<!--
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
-->
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                       <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav" class="bg-dark text-light">
                <nav class="sb-sidenav accordion sb-sidenav-primary" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                         <div class="nav">
                           <div class="potoku">
                            <center><img src="img/PR.ico"></center>
							</div>
                           <div class="sb-sidenav-menu-heading">Dashboard</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Autentifikasi User</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Autentifikasi
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                  
                                            <a class="nav-link" href="registrasi.php">Register</a>
                                            <a class="nav-link" href="lupa-password.php">Forgot Password</a>           				                                                      
                        </div>
								<div class="sb-sidenav-menu-heading">Rumah Sakit Ibu & Anak</div>
                        <a class="nav-link" href="data-pasien.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Data Pasien
                            </a>
				<a class="nav-link" href="tambah.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                               Tambah Pasien
                            </a>
				<a class="nav-link" href="profil-dokter.php">
                                <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
                              Profil Dokter
                            </a>
                            <a class="nav-link" href="rawat-inap.php">
                                <div class="sb-nav-link-icon"> <i class="bi bi-subtract"></i></div>
                              Rawat Inap
                            </a>
                    </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Pasien</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Pasien</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                              Data pasien dalam sistem informasi rumah sakit ibu dan anak.
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Pasien
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
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
											<td class="nomor-urut"><?= $i; ?></td>
                                           <td><?php echo $row["nama"]; ?></td>
                                                <td><?php echo $row["umur"]; ?></td>
										<td><?php echo $row["gender"]; ?></td>
										<td><?php echo $row["tinggal"]; ?></td>
										<td><?php echo $row["check_in"]; ?></td>
										<td><?php echo $row["check_out"]; ?></td>
										<td><?php echo $row["kamar"]; ?></td>
								        	<td>	
								<center><a class="link-aksi-ubah font-weight-bold" href="ubah.php?id=<?php echo $row["id"]; ?>">Ubah<i class="bi bi-pencil-fill"></i></a></center>
                                                <br>
								<center><a class="font-weight-bold link-aksi-hapus" href="hapus.php?id=<?php echo $row["id"];?>" onClick="return confirm('Apakah anda yakin?');">Hapus <i class="bi bi-x-square-fill"></i></a></center>
								</td>
                                            </tr>
                                           <?php $i++; ?>
					   <?php endforeach; ?>
                                         
                                           
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
