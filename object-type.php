<?php

// Membuat Default Property
class Produk {
    // Mendefinisikan properti default dengan nilai awal
    public $judul, 
           $penulis,
           $penerbit,
           $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Membuat Method
    // Method untuk mengembalikan label produk
    public function getLabel() {
        // Menggunakan properti objek saat ini
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}

// Memanggil Object
// Sebuah Instansiasi / Instance
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000); // Membuat objek baru dari class Produk

// Mengubah properti objek $produk2
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

// Menampilkan label produk untuk objek $produk3
echo "Komik : " . $produk1->getLabel(); // Output: Komik : Naruto, Masashi Kishimoto
echo "<br>";
// Menampilkan label produk untuk objek $produk4
echo "Game : " . $produk2->getLabel(); // Output: Game : Uncharted, Neil Druckmann
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);