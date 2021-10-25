<?php
//file koneksi database
include_once "database.php";

//ketika tombol cetak di klik
if(isset($_POST["cetak"])){
  //buat sebuah penambahan atau update antrian loket
$bun = mysqli_query($db, "SELECT * FROM loket1");
while($row = mysqli_fetch_assoc($bun)){
 $jml_antrian = $row['antrian'];
 $jml_baru = $jml_antrian + 1;
 $update_antrian = mysqli_query($db, "UPDATE loket1 SET antrian='$jml_baru'");
 } 
}
?>

<html lang="en">
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://code.responsivevoice.org/responsivevoice.js?key=7tW19wIl"></script>
 <link rel="stylesheet" href="style.css">
<title>Aplikasi Suara Antrian</title>
</head>
    
    
<body>
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
        <center><span class="border border-white fs-2 p-3" style="color:white;">Nomor Antrian Saat Ini : <?php echo $jml_baru; ?></span>
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
            <form method="post" action="">
            <button id="panggil" type="button" class="btn btn-light bg-light m-1">Panggil</button>
            <button id="cetak" type="submit" class="btn btn-light bg-light m-1" name="cetak">Cetak</button>
            </form>
        </div>
        </div>
    </div>
    
<!--    Buat bel HTML-->
    <audio src="Airport_Bell.mp3"></audio>
    

<script type="text/javascript">
    //buat variabel
  let panggil = document.getElementById('panggil');
   
    //ketika tombol panggil di klik
panggil.addEventListener('click', panggilAntrian);

      
  //jalankan fungsi panggilAntrian           
  function panggilAntrian() {
      //buat variabel
        let audioElement = document.getElementsByTagName('audio')[0];
      //mainkan suara nomor antrian
        audioElement.load();
        audioElement.play();
       setTimeout(function(){
          responsiveVoice.speak('Nomor antrian , <?php echo $jml_baru; ?> , di loket 1' , 'Indonesian Female')
      },7700)
    }
    </script>   
</body>
</html>