<?php

// Membuat Default Property
class Produk {
    // Mendefinisikan properti default dengan nilai awal
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function __construct( $judul ,$penulis, $penerbit, $harga ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Membuat Method
    // Method untuk mengembalikan label produk
    public function getLabel() {
        // Menggunakan properti objek saat ini
        return "$this->judul, $this->penulis";
    }
}

// Memanggil Object
// Sebuah Instansiasi / Instance
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000); // Membuat objek baru dari class Produk

// Mengubah properti objek $produk2
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

// Menampilkan label produk untuk objek $produk3
echo "Komik : " . $produk3->getLabel(); // Output: Komik : Naruto, Masashi Kishimoto
echo "<br>";
// Menampilkan label produk untuk objek $produk4
echo "Game : " . $produk4->getLabel(); // Output: Game : Uncharted, Neil Druckmann