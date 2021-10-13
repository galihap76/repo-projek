<?php
//buat class
class User{
    //buat static
    public static $nama = "galih";
    
    //buat method
    public static function panggil(){
        return "Halo " . self::$nama;
    }
    
}

//panggil class
echo User::panggil();

?>