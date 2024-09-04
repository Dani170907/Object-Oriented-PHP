<?php

class Produk {
    // Mendefinisikan property default dengan nilai awal
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    // menangkap parameter dari object
    public function __construct( $judul, $penulis, $penerbit, $harga ) {
        // mengisi property
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

// Instansiasi Produk, kirim data dari object ke constructor
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<hr>";
echo "Game : " . $produk2->getLabel();

?>