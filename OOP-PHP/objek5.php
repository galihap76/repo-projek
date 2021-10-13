<?php
//class PHP
class Math{
    protected $tambah,
              $kurang,
              $kali,
              $bagi;
    
    public function jalankanMathTambah($a, $b){
        $hasil = $a + $b;
        return $hasil;
        
    }
    public function jalankanMathKurang($a, $b){
        $hasil = $a - $b;
        return $hasil;
    }
    public function jalankanMathKali($a, $b){
        $hasil = $a * $b;
        return $hasil;
    }
    public function jalankanMathBagi($a, $b){
        $hasil = $a / $b;
        return $hasil;
    }
            
}

//instansiasi
$OOP = new Math();

echo $OOP->jalankanMathTambah(10,20);
echo "<br>";
echo $OOP->jalankanMathKurang(70,80);
echo "<br>";
echo $OOP->jalankanMathKali(90,80);
echo "<br>";
echo $OOP->jalankanMathBagi(80,80);


?>