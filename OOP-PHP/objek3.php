<?php
class Aritmatika{
	public $tambah,
		   $kurang,
		   $kali,
		   $bagi;
	
   public function tambah(){
	   return $this->tambah = 50 + 50;
   }
	public function kurang(){
	   return $this->kurang = 120 - 50;
   }
	public function kali(){
	   return $this->kali = 90 * 50;
   }
	public function bagi(){
	   return $this->bagi = 50 / 50;
   }
}
$panggil = new Aritmatika();
echo "50 + 50 = " . $panggil->tambah();
echo "<br>";
echo "120 - 50 = " . $panggil->kurang();
echo "<br>";
echo "90 * 50 = " . $panggil->kali();
echo "<br>";
echo "50 / 50 = " . $panggil->bagi();

?>