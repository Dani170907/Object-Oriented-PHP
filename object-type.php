<?php

// Mendefinisikan class Produk untuk merepresentasikan produk
class Produk {
    // Property yang akan diisi dengan nilai dari constructor
    public $judul,
           $penulis,
           $penerbit,
           $harga = 0;

    // Constructor untuk menerima parameter dan menginisialisasi property dari object
    // Jika tidak ada nilai yang diberikan, akan menggunakan nilai default
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
        // Mengisi property class dengan nilai dari parameter
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Method untuk mengembalikan label produk (penulis dan penerbit)
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk {
    public function cetak($produk) {
        $str = "({$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    }
}

// Membuat object Produk dengan nilai yang diberikan ke constructor
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000); // Produk 1 adalah komik
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000); // Produk 2 adalah game

// Menampilkan label produk 'Naruto'
echo "Komik : " . $produk1->getLabel();
echo "<hr>"; // Garis pemisah dalam HTML
// Menampilkan label produk 'Uncharted'
echo "Game : " . $produk2->getLabel();

?>
