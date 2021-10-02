<?php
//jualan produk
//komik
//game
//class Produk{
//	public $judul,
//	       $penulis,
//	       $penerbit;
//	
//	public function __construct($judul, $penulis, $penerbit){
//		$this->judul = $judul;
//		$this->penulis = $penulis;
//		$this->penerbit = $penerbit;
//	}
//	
//	public function getLabel(){
//		return "$this->judul $this->penulis $this->penerbit";
//	}
//}
//
//$produk1 = new Produk("Naruto | ", "Masashi Kishimoto", "Shonen Jump (Rp. 30000)");
//$produk2 = new Produk("Uncharted | ", "Neil Druckman", "Sony Computer (Rp 250000)");
//
//echo "Komik : " . $produk1->getLabel() . ' - 100 Halaman.';
//echo "<br>";
//echo "Game : " . $produk2->getLabel() . ' - 50 Jam.';

// buat class induk: komputer
class komputer {
  
   public $merk;
   public $processor;
   public $memory;
  
   public function beli_komputer() {
     return "Beli komputer baru";
   }
}
  
// turunkan class komputer ke laptop
class laptop extends komputer {
  
   public function lihat_spec() {
     return "merk: $this->merk, processor: $this->processor, 
     memory: $this->memory";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop();
  
// isi property objek
$laptop_baru->merk = "acer";
$laptop_baru->processor ="intel core i5";
$laptop_baru->memory = "2 GB";
  
//panggil method objek
echo $laptop_baru->beli_komputer();
echo "<br />";
echo $laptop_baru->lihat_spec();



?>