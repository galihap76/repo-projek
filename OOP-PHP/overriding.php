<?php
//buat objek class
class Mobil{
    
    public function jalankanMobil(){
        echo "Jalankan avanza!";
    }
}

class Mobil2 extends Mobil{
    public function jalankanMobil(){
        return parent::jalankanMobil();
    }
}


$foo = new Mobil2();


echo $foo->jalankanMobil();




?>