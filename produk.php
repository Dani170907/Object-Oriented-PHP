<?php

class Produk {
    // Mendefinisikan property default dengan nilai awal
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function sayHello() {
        return "Hello World";
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

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->sayHello();

?>