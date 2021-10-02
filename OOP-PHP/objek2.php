<?php
class Datasaya{
	public $namasaya,
		   $umursaya,
	       $keahliansaya,
		   $citacitasaya,
		   $hobisaya;
	
	public function __construct($namasaya, $umursaya, $keahliansaya, $citacitasaya, $hobisaya){
		        $this->namasaya = $namasaya;
				$this->umursaya = $umursaya;
				$this->keahliansaya = $keahliansaya;
				$this->citacitasaya = $citacitasaya;
				$this->hobisaya = $hobisaya;
	}
	
	public function data(){
		return "$this->namasaya,
				$this->umursaya,
				$this->keahliansaya,
				$this->citacitasaya,
				$this->hobisaya";
	}
}

$panggil_data_saya = new Datasaya("galih anggoro prasetya", 18, "pemrograman", "pemrogram", "ngoding dan game");
echo "Data saya : " . $panggil_data_saya->data();

?>