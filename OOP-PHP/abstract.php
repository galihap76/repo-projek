<?php
//abstract pada php class tidak bisa di instansiasi langsung dalam hal ini, ini akan berlaku pada child class bukan parent class

//buat class
abstract class Komputer{
    //buat method abstract
    abstract public function Laptop_acer();
    abstract public function Laptop_lenovo();
    abstract public function Laptop_hp();
}

class Laptop extends Komputer{
    //panggil method parent class Laptop
    public function Laptop_acer(){
        return "Laptop acer";
    }
     public function Laptop_lenovo(){
        return "Laptop lenovo";
    }
     public function Laptop_hp(){
        return "Laptop hp";
    }
}

$laptop = new Laptop();
echo $laptop->Laptop_acer();
echo "<br>";
echo $laptop->Laptop_lenovo();
echo "<br>";
echo $laptop->Laptop_hp();



?>