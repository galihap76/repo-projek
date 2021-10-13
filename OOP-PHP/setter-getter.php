<?php
//buat class objek
class Person{
    //buat properti
    private $nama,
            $umur,
            $pekerjaan,
            $alamat;
    
    //buat setter
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function setUmur($umur){
        $this->umur = $umur;
    }
    public function setPekerjaan($pekerjaan){
        $this->pekerjaan = $pekerjaan;
    }
    public function setAlamat($alamat){
        $this->alamat = $alamat;
    }
    
    //buat setter
    public function getNama(){
        return $this->nama;
    }
    public function getUmur(){
        return $this->umur;
    }
    public function getPekerjaan(){
        return $this->pekerjaan;
    }
    public function getAlamat(){
        return $this->alamat;
    }
}

$person1 = new Person();

//set
$person1->setNama("Galih Anggoro Prasetya");
$person1->setUmur(17);
$person1->setPekerjaan("Programmer");
$person1->setAlamat("Gumayun 02");


//get
echo "Nama : " . $person1->getNama();
echo "<br>";
echo "Umur : " . $person1->getUmur();
echo "<br>";
echo "Pekerjaan : " . $person1->getPekerjaan();
echo "<br>";
echo "Alamat : " . $person1->getALamat();


?>