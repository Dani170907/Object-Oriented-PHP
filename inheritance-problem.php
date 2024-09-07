<?php

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga = 0;

    
    
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
        $this->judul = $judul; 
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga; 
    }

    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk {

    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000); // Produk 1 adalah komik dengan informasi lengkap
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000); // Produk 2 adalah game dengan informasi lengkap


?>
