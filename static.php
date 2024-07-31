<?php

// class ContohStatic {
//     public static $angka = 1;

//     public static function halo() {
//         return "Halo." . self::$angka++ . " kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();


class Contoh {
    public $angka = 1;
    
    public function halo() {
        return "Halo" . $this->angka . "kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();