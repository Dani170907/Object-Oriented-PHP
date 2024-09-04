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
var_dump($produk1);

?>