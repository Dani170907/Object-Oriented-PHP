<?php

class Produk {
    // Mendefinisikan property default dengan nilai awal
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

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


$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

?>