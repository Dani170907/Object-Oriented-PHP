<?php

// Mendefinisikan class Produk yang akan digunakan untuk menyimpan informasi produk
class Produk {
    // Property default dengan nilai awal yang akan di-override oleh instansiasi object
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    // Method untuk mengambil label produk yang terdiri dari penulis dan penerbit
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// Membuat object baru dari class Produk dan mengisi property-nya
$produk3 = new Produk();
$produk3->judul = "Naruto"; // Override nilai default 'judul' menjadi 'Naruto'
$produk3->penulis = "Masashi Kishimoto"; // Mengisi nilai property 'penulis'
$produk3->penerbit = "Shonen Jump"; // Mengisi nilai property 'penerbit'
$produk3->harga = 300000; // Mengisi nilai property 'harga'

// Membuat object baru dari class Produk dengan detail produk yang berbeda
$produk4 = new Produk();
$produk4->judul = "Uncharted"; // Override nilai default 'judul' menjadi 'Uncharted'
$produk4->penulis = "Neil Druckmann"; // Mengisi nilai property 'penulis'
$produk4->penerbit = "Sony Computer"; // Mengisi nilai property 'penerbit'
$produk4->harga = 250000; // Mengisi nilai property 'harga'

// Menampilkan label dari produk 'Naruto' menggunakan method getLabel
echo "Komik : " . $produk3->getLabel();
echo "<hr>"; // Membuat garis pemisah HTML
// Menampilkan label dari produk 'Uncharted' menggunakan method getLabel
echo "Game : " . $produk4->getLabel();

?>
