<?php
session_start();

include_once 'database-query.php';

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}


?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Profil Dokter</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="styles.css" rel="stylesheet" />
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
			.rawat-inap{
				background-color:#FF80F6;
			}
			.card{
				box-shadow:1px 1px 3px 1px gray;
			}
			
		</style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <h4 class="judul-projek">Sistem Informasi Rumah Sakit</h4>
            <button class="btn btn-link btn-sm order-1 order-lg-0  ml-4" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">              
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
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4 font-weight-bold">Dokter Rumah Sakit Ibu Dan Anak</h1>
                           <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Selamat Datang Di Halaman Dokter Rumah Sakit Ibu Dan Anak</li>
                        </ol>
<!--                        Bagian 1-->
                         <div class="row justify-content-center">  
                         <div class="col-xl-3 col-md-5">
								 <div class="card mb-3">
				  <img src="img/dr. Muchit.jpg" class="card-img-top" alt="dokter1">
				  <div class="card-body">
					<p class="card-text text-center font-weight-bold">dr. Abdul Muchit,</p>
					<p class="card-text text-center font-weight-bold">Sp.OG.</p>
				  </div>
				</div>
						 </div> 
						       <div class="col-xl-3 col-md-6">
								 <div class="card mb-3">
					  <img src="img/dr. Arief Pinudjo.jpg" class="card-img-top" alt="dokter2">
					  <div class="card-body">
								<p class="card-text text-center font-weight-bold">dr. Arif Pinudjo</p>
					  </div>
					</div>
							</div>
							      <div class="col-xl-3 col-md-6">
								 <div class="card mb-3">
					  <img src="img/female.jpg" class="card-img-top" alt="dokter3">
					  <div class="card-body">
								<p class="card-text text-center font-weight-bold">dr. Arifiyah, Sp.A</p>
					  </div>
					</div>
							</div>      
						</div>
						
<!--						Bagian 2-->
						<div class="row justify-content-center">
						      <div class="col-xl-3 col-md-6">
								 <div class="card mb-3">
					  <img src="img/dr. Dewi Amaliyah Ulfah, Sp.A.jpg" class="card-img-top" alt="dokter4">
					  <div class="card-body">
								<p class="card-text text-center font-weight-bold">dr. Dewi Amaliyah Ulfah, Sp. A</p>
					  </div>
					</div>
							</div>
							 <div class="col-xl-3 col-md-6">
								 <div class="card mb-3">
					  <img src="img/dr. Fakih N.S Latief.jpg" class="card-img-top" alt="dokter5">
					  <div class="card-body">
								<p class="card-text text-center font-weight-bold">dr. Fakih Nur Salimi</p>
					  </div>
					</div>
							</div>    
							 <div class="col-xl-3 col-md-6">
								 <div class="card mb-3">
					  <img src="img/male.jpg" class="card-img-top" alt="dokter6">
					  <div class="card-body">
								<p class="card-text text-center font-weight-bold">dr. Herry Susanto, SpA</p>
					  </div>
					</div>
							</div>           
						</div>
						
<!--						Bagian 3-->
						<div class="row justify-content-center">
						      <div class="col-xl-3 col-md-6">
								 <div class="card mb-3">
					  <img src="img/dr. Isti Airlangga.jpg" class="card-img-top" alt="dokter7">
					  <div class="card-body">
								<p class="card-text text-center font-weight-bold">dr. Isti Airlangga</p>
					  </div>
					</div>
							</div>
							 <div class="col-xl-3 col-md-6">
								 <div class="card mb-3">
					  <img src="img/dr. Octa.jpg" class="card-img-top" alt="dokter8">
					  <div class="card-body">
								<p class="card-text text-center font-weight-bold">dr. Octaviana Yossefin, SPOG</p>
					  </div>
					</div>
							</div>    
							 <div class="col-xl-3 col-md-6">
								 <div class="card mb-3">
					  <img src="img/dr. Rosiani.jpg" class="card-img-top" alt="dokter9">
					  <div class="card-body">
								<p class="card-text text-center font-weight-bold">dr. Rosiani</p>
					  </div>
					</div>
							</div>           
						</div>
<!--						Bagian 4-->
					
						<div class="row justify-content-center">
						      <div class="col-xl-3 col-md-6">
								 <div class="card mb-3">
					  <img src="img/dr. Septi, Sp.A.jpg" class="card-img-top" alt="dokter7">
					  <div class="card-body">
								<p class="card-text text-center font-weight-bold">dr. Septiana Nur Qurbani, Sp.A, M.Kes</p>
					  </div>
					</div>
							</div>
							 <div class="col-xl-3 col-md-6">
								 <div class="card mb-3">
					  <img src="img/dr. Sutarto Hadisumartono, Sp.A.jpg" class="card-img-top" alt="dokter8">
					  <div class="card-body">
								<p class="card-text text-center font-weight-bold">dr. Sutarto Hadisumartono, SPA</p>
					  </div>
					</div>
							</div>    
							 <div class="col-xl-3 col-md-6">
								 <div class="card mb-3">
					  <img src="img/female.jpg" class="card-img-top" alt="dokter9">
					  <div class="card-body">
								<p class="card-text text-center font-weight-bold">dr. Tetrani, SPD</p>
					  </div>
					</div>
							</div>           
						</div>
<!--						Bagian 5-->
					<div class="row justify-content-center">
						      <div class="col-xl-3 col-md-6">
								 <div class="card mb-3">
					  <img src="img/dr.Waluyati.jpg" class="card-img-top" alt="dokter7">
					  <div class="card-body">
								<p class="card-text text-center font-weight-bold">dr. Waluyati</p>
					  </div>
					</div>
							</div>
							   <div class="col-xl-3 col-md-6">
								 <div class="card mb-3">
					  <img src="img/male.jpg" class="card-img-top" alt="dokter7">
					  <div class="card-body">
								<p class="card-text text-center font-weight-bold">dr. Zufrial Arief, SPOG</p>
					  </div>
					</div>
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
    </body>
</html>
