<?php
//interface kelas abstrak yang sama sekali tidak memiliki implementasi

//murni merupakan template untuk kelas turunannya

//tidak boleh memiliki property , hanya deklarasi method saja
class Game{
    public function __construct(){
        echo "Ini dari __construct";
    }
    public function MethodBiasa(){
        return "Ini dari method biasa";
    }
}
$foo1 = new Game();
echo "<br>";
echo $foo1->MethodBiasa();
echo "<hr>";


?>


<?php

interface Kendaraan
{
    public function __construct();
    public function getWarna();
}

class Motor implements Kendaraan
{
    public function __construct()
    {
        echo "Halo ini dari konstructor Motor<br>";
    }
    public function getWarna()
    {
        return "Hijau";
    }
}

class Mobil implements Kendaraan
{
    public function __construct()
    {
        echo "Halo ini dari konstructor Mobil<br>";
    }
    public function getWarna()
    {
        return "Biru";
    }
}

$motor = new Motor();
echo $motor->getWarna();
echo "<br>";
$mobil = new Mobil();
echo $mobil->getWarna();

?>