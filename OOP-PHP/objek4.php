<?php
class Harga{
    public $laptop;
    
    public function Acer($laptop){
        return "Harga laptop " . $this->laptop = $laptop . " 7 juta";
    }
}


$panggil1 = new Harga();

echo $panggil1->Acer("acer");
?>