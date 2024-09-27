<?php

class ContohStatic {
    public static $angka = 1;

    public static function halo() {
        return "Halo. " . self::$angka++ . " Kali";
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<br>";    
echo ContohStatic::halo();
echo "<hr>";

class Contoh {
    public static $nomor = 1;

    public function hai() {
        return "Hai. " . self::$nomor++ . " Kali<br>";
    }
}

$obj = new Contoh;
echo $obj->hai();
echo $obj->hai();
echo $obj->hai();

echo "<br>";

$obj2 = new Contoh();
echo $obj2->hai();
echo $obj2->hai();
echo $obj2->hai();

?>