<?php
//buat objek class 
class Datasaya{
	public $namasaya, //buat properti objek
		   $umursaya,
	       $keahliansaya;
}
//buat instansi objek agar siap di laksanakan
$panggil_data_saya = new Datasaya();

//ganti properti dan akses isi property class
$panggil_data_saya->namasaya = "galih anggoro prasetya";
$panggil_data_saya->umursaya = 18;
$panggil_data_saya->keahliansaya = "pemrograman";

//tampilkan objek pada web browser
echo "Nama saya : " . $panggil_data_saya->namasaya;
echo "<br>";
echo "Umur saya : " . $panggil_data_saya->umursaya;
echo "<br>";
echo "Keahlian saya : " . $panggil_data_saya->keahliansaya;
echo "<br>";

//buat kerangka objek atau objek class
class Tokolaptop{
	public $merk, //properti objek
		   $processor,
		   $harga;
	
	//method pada objek agar melakukan sesuatu pada objek
	public function diskon(){
		return "Diskon 40%";
	}
}

//buat objek sungguhan 
$asus = new Tokolaptop();
$acer = new Tokolaptop();

//isi properti dan akses isi objek class Tokolaptop
$asus->merk = "asus";
$asus->processor = "intel i3 gen 10";
$asus->harga = "5 juta";
$acer->merk = "acer";
$acer->processor = "intel i5 gen 8";
$acer->harga = "8 juta";

//tampilkan objek class Tokolaptop
echo "<br>";
echo "Merk laptop : " . $asus->merk;
echo "<br>";
echo "Processor laptop : " . $asus->processor;
echo "<br>";
echo "Harga laptop : " . $asus->harga;
echo "<br>";

//tampilkan method objek class
echo $asus->diskon();

echo "<br>";
echo "<br>";
echo "Merk laptop : " . $acer->merk;
echo "<br>";
echo "Processor laptop : " . $acer->processor;
echo "<br>";
echo "Harga laptop : " . $acer->harga;
echo "<br>";
//tampilkan method objek class
echo $acer->diskon();
?>






