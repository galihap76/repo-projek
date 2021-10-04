<?php
	//Initialisasi nilai untuk nomor loket
	//Pada kasus nyata nomor loket dimabil pada saat login  
	//sesuai dengan data pada tabel admin
//	$loket="1";
?>

<html lang="en">
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />

<title>Aplikasi Suara Antrian</title>
</head>
    
    
<body >
<!--    Judul aplikasi-->
    <nav class="navbar bg-dark">
  <div class="container-fluid">
   <h4 class="text-uppercase app">Aplikasi Antrian Loket</h4>
  </div>
</nav>
       
<!--    Bel aplikasi-->
    
		<audio id="suarabel" src="Airport_Bell.mp3"></audio>
		<audio id="suarabelnomorurut" src="rekaman/nomor-urut.wav"  ></audio> 
		<audio id="suarabelsuarabelloket" src="rekaman/loket.wav"  ></audio> 
       
		<audio id="belas" src="rekaman/belas.wav"  ></audio> 
		<audio id="sebelas" src="rekaman/sebelas.wav"  ></audio> 
        <audio id="puluh" src="rekaman/puluh.wav"  ></audio> 
        <audio id="sepuluh" src="rekaman/sepuluh.wav"  ></audio> 
        <audio id="ratus" src="rekaman/ratus.wav"  ></audio> 
        <audio id="seratus" src="rekaman/seratus.wav"  ></audio> 
        <audio id="suarabelloket1" src="rekaman/2.wav"  ></audio> 
		<?php
			 $location_counter = "data.txt";
			 $location_date = "date.txt";
			 $itis = date ("d");
			 
			 // Hari baru?    
			$aday = join('', file($location_date));
			trim($aday);
		
			if("$aday"=="$itis"){
				//Cari hari ini
				$tcounter = join('', file($location_counter));
				trim($tcounter);
				$tcounter++;
				
				$fp = fopen($location_counter,"w");
				fputs($fp, $tcounter);
				fclose($fp);
			}else{
				//hari baru
				$fp = fopen($location_counter,"w");
				fputs($fp, 0);
				fclose($fp);
				$tcounter = join('', file($location_counter));
				trim($tcounter);
				$tcounter++;
				//tulis hari baru
				$fp = fopen($location_counter,"w");
				fputs($fp, $tcounter);
				fclose($fp);
				//tulis di date.txt
				$fp = fopen($location_date,"w");
				fputs($fp, $itis);
				fclose($fp);	
			}

			$panjang=strlen($tcounter);
			$antrian=$tcounter;
           
			
			for($i=0;$i<$panjang;$i++){
		?>
        		<audio id="suarabel<?php echo $i; ?>" src="rekaman/<?php echo substr($tcounter,$i,1); ?>.wav" ></audio>   		        
        <?php
			}
		?>
<!--    Judul aplikasi-->
    <br>
    <center><img src="PR.ico"> <h2 style="display:inline;  color:white;">Rumah Sakit Ibu &amp; Anak</h2></center>
    <br>
     <br> 
    
<!--    Loket-->
    <div class="container">
    <div class="row text-center">
        <div class="col">
        <h2 class="bg-dark text-light p-2">Loket 1</h2>
        </div>
        <div class="col">
        <h2 class="bg-dark text-light  p-2">Loket 2</h2>
        </div>
        <div class="col">
        <h2 class="bg-dark text-light  p-2">Loket 3</h2>
        </div>
        </div>
    </div>
    <br>
    <br>
    
<!--    Nomor antrian-->
    <div class="container">
        <div class="row">
            <div class="col">
        <center><span class="border border-white fs-2 p-3" style="color:white;">Nomor Antrian Saat Ini : <?php echo $antrian; ?></span>
        </center>
    </div>
    </div>
    </div>   
    <br>
    <br>
    
<!--    Tombol aplikasi-->
    <div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <button id="cetak" type="button" class="btn btn-light bg-light m-1" style="color:black;">Cetak</button>
            <button id="panggil" type="button" class="btn btn-light bg-light m-1">Panggil</button>
        </div>
        </div>
    </div>
    
		
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
let cetak = document.getElementById('cetak');
let pangil = document.getElementById('panggil');


cetak.addEventListener('click', cetakAntrian);
panggil.addEventListener('click', panggilAntrian);



function cetakAntrian(){
     location.href = "index.php";
 }       
        
                
function panggilAntrian(){
	//MAINKAN SUARA BEL PADA SAAT AWAL
	document.getElementById('suarabel').pause();
	document.getElementById('suarabel').currentTime=0;
	document.getElementById('suarabel').play();
			
	//SET DELAY UNTUK MEMAINKAN REKAMAN NOMOR URUT		
	totalwaktu=document.getElementById('suarabel').duration*1000;	

	//MAINKAN SUARA NOMOR URUT		
	setTimeout(function() {
			document.getElementById('suarabelnomorurut').pause();
			document.getElementById('suarabelnomorurut').currentTime=0;
			document.getElementById('suarabelnomorurut').play();
	}, totalwaktu);
	totalwaktu=totalwaktu+1000;
	
	<?php
		//JIKA KURANG DARI 10 MAKA MAINKAN SUARA ANGKA1
		if($antrian<10){
	?>
			
			setTimeout(function() {
					document.getElementById('suarabel0').pause();
					document.getElementById('suarabel0').currentTime=0;
					document.getElementById('suarabel0').play();
				}, totalwaktu);
			
			totalwaktu=totalwaktu+1000;
	<?php		
		}elseif($antrian ==10){
			//JIKA 10 MAKA MAINKAN SUARA SEPULUH
	?>  
				setTimeout(function() {
						document.getElementById('sepuluh').pause();
						document.getElementById('sepuluh').currentTime=0;
						document.getElementById('sepuluh').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		<?php		
			}elseif($antrian ==11){
				//JIKA 11 MAKA MAINKAN SUARA SEBELAS
		?>  
				setTimeout(function() {
						document.getElementById('sebelas').pause();
						document.getElementById('sebelas').currentTime=0;
						document.getElementById('sebelas').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		<?php		
			}elseif($antrian < 20){
				//JIKA 12-20 MAKA MAINKAN SUARA ANGKA2+"BELAS"
		?>  				
				setTimeout(function() {
						document.getElementById('suarabel1').pause();
						document.getElementById('suarabel1').currentTime=0;
						document.getElementById('suarabel1').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('belas').pause();
						document.getElementById('belas').currentTime=0;
						document.getElementById('belas').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		<?php		
			}elseif($antrian < 100){				
				//JIKA PULUHAN MAKA MAINKAN SUARA ANGKA1+PULUH+AKNGKA2
		?>  
				setTimeout(function() {
						document.getElementById('suarabel0').pause();
						document.getElementById('suarabel0').currentTime=0;
						document.getElementById('suarabel0').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('puluh').pause();
						document.getElementById('puluh').currentTime=0;
						document.getElementById('puluh').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabel1').pause();
						document.getElementById('suarabel1').currentTime=0;
						document.getElementById('suarabel1').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				
		<?php
			}else{
				//JIKA LEBIH DARI 100 
				//Karena aplikasi ini masih sederhana maka logina konversi hanya sampai 100
				//Selebihnya akan langsung disebutkan angkanya saja 
				//tanpa kata "RATUS", "PULUH", maupun "BELAS"
		?>
		
		<?php 
			for($i=0;$i<$panjang;$i++){
		?>
		
		totalwaktu=totalwaktu+1000;
		setTimeout(function() {
						document.getElementById('suarabel<?php echo $i; ?>').pause();
						document.getElementById('suarabel<?php echo $i; ?>').currentTime=0;
						document.getElementById('suarabel<?php echo $i; ?>').play();
					}, totalwaktu);
		<?php
			}
			}
		?>
		
		
		totalwaktu=totalwaktu+1000;
		setTimeout(function() {
						document.getElementById('suarabelsuarabelloket').pause();
						document.getElementById('suarabelsuarabelloket').currentTime=0;
						document.getElementById('suarabelsuarabelloket').play();
					}, totalwaktu);
		
		totalwaktu=totalwaktu+1000;
		setTimeout(function() {
						document.getElementById('suarabelloket1').pause();
						document.getElementById('suarabelloket1').currentTime=0;
						document.getElementById('suarabelloket1').play();
					}, totalwaktu);	
}  
    </script>   
</body>
</html>