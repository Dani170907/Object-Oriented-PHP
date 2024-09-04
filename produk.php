<?php

class Produk {
    // Mendefinisikan property default dengan nilai awal
    public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;
}

// Membuat instansiasi dari class produk
$produk1 = new Produk();
$produk1->judul = "Naruto";
var_dump($produk1);

$produk2 = new Produk();
$produk2 ->judul = "Uncharted";
var_dump($produk2->judul);

?>