<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Aplikasi Antrian</title>
        
        <style>
            h2{
                font-size:70px;
            }
        
        </style>
    </head>
    <body>
        <audio id="suarabel" src="yakuza.mp3"></audio>
        
        
        <form>
  
            <center><button type="button" id="suara_bel">Suara</button></center>
            <center><button type="button" id="suara_bel2">Stop</button></center>
        
        </form>
        
        
        
        
        <script type="text/javascript">
        let suara_bel = document.getElementById('suara_bel');
         
            
    suara_bel.addEventListener('click', function(){
          //MAINKAN SUARA BEL PADA SAAT AWAL
	document.getElementById('suarabel').play();
        });
            
    suara_bel2.addEventListener('click', function(){
          //MAINKAN SUARA BEL PADA SAAT AWAL
	document.getElementById('suarabel').pause();
        });
      
            
        
        </script>
    </body>
</html>
