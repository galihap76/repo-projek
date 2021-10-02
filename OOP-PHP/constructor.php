<?php
//class Datasaya{
//	public $namasaya,
//		   $umursaya,
//		   $keahliansaya,
//		   $cita_cita;
//	
//	public function __construct($namasaya, $umursaya, $keahliansaya, $cita_cita){
//		$this->namasaya = $namasaya;
//		$this->umursaya = $umursaya;
//		$this->keahliansaya = $keahliansaya;
//		$this->cita_cita = $cita_cita;
//		
//	}
//	
//	public function daftarKu(){
//		return "$this->namasaya, $this->umursaya, $this->keahliansaya, $this->cita_cita";
//	}
//}
//
//$tampilkan_data_saya = new Datasaya("galih anggoro prasetya", 18, "pemrograman", "programmer");
//
//echo "Data saya : " . $tampilkan_data_saya->daftarKu();


//jualan produk
//komik
//game
class Produk{
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga;
	
	public function __construct($judul, $penulis, $penerbit, $harga){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}
	
	public function getLabel(){
		return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
	}
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();


?>