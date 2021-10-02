<?php
//buat kelas sebagai kerangka dasar objek
class elektronik{
    //properti protected untuk promosi spesial
    protected $merk = "acer aspire",
              $harga = "7 juta", 
              $warna = "hitam";
    
    public function hargaProcessor($processor){
        return "harga processor = $processor ";
    }
}

class laptop extends elektronik{
    //method
    public function acer(){
        return "laptop = $this->merk, harga = $this->harga, warna  = $this->warna, ";
    }
     public function asus($merk, $harga, $warna){
        return "laptop = $merk, harga = $harga, warna  = $warna ";
    }
}
$laptopMidend = new laptop();

echo "PROMO SPESIAL ". $laptopMidend->acer() . $laptopMidend->hargaProcessor(3000000 *2);
echo "<br>";
echo $laptopMidend->asus("asus e202s", "4 juta", "merah");
echo "<br>";



?>






