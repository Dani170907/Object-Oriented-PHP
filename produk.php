<?php

class Produk {
    // Mendefinisikan property default dengan nilai awal
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2 ->judul = "Uncharted";
// $produk2->tambahProperty = "property tambahan";
// var_dump($produk2);

// Membuat instansiasi dari class produk
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 300000;
var_dump($produk3);

?>