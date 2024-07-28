<?php

// Membuat Default Property
class Produk {
    // Mendefinisikan properti default dengan nilai awal
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    // Membuat Method
    // Method untuk mengembalikan label produk (judul dan penulis)
    public function getLabel() {
        // Menggunakan properti objek saat ini
        return "$this->judul, $this->penulis";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Need For Speed Most Wanted";
// $produk2->tambahProperty = "Game Paling Keren";
// var_dump($produk2);


// Memanggil Object
// Sebuah Instansiasi / Instance
$produk3 = new Produk(); // Membuat objek baru dari class Produk
// Mengubah properti objek $produk3
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk(); // Membuat objek baru dari class Produk
// Mengubah properti objek $produk4
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

// Menampilkan label produk untuk objek $produk3
echo "Komik : " . $produk3->getLabel(); // Output: Komik : Naruto, Masashi Kishimoto
echo "<br>";
// Menampilkan label produk untuk objek $produk4
echo "Game : " . $produk4->getLabel(); // Output: Game : Uncharted, Neil Druckmann