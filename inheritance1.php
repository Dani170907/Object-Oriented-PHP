<?php

// Mendefinisikan class Produk sebagai parent class untuk berbagai jenis produk
class Produk {
    // Property yang mendeskripsikan atribut produk
    public $judul,          // Judul produk, misalnya judul buku atau game
           $penulis,        // Nama penulis atau pembuat produk
           $penerbit,       // Nama penerbit atau perusahaan yang menerbitkan produk
           $harga = 0,      // Harga produk, default 0
           $jmlHalaman,     // Jumlah halaman (untuk komik)
           $waktuMain;      // Waktu bermain (untuk game)
    
    // Constructor untuk menginisialisasi nilai property dari parameter
    // Jika parameter tidak diberikan, akan menggunakan nilai default
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
        $this->judul = $judul;             // Mengisi property 'judul'
        $this->penulis = $penulis;         // Mengisi property 'penulis'
        $this->penerbit = $penerbit;       // Mengisi property 'penerbit'
        $this->harga = $harga;             // Mengisi property 'harga'
        $this->jmlHalaman = $jmlHalaman;   // Mengisi property 'jmlHalaman' untuk komik
        $this->waktuMain = $waktuMain;     // Mengisi property 'waktuMain' untuk game
    }

    // Method untuk mengembalikan label yang berisi penulis dan penerbit
    public function getLabel() {
        return "$this->penulis, $this->penerbit"; // Mengembalikan format string: "penulis, penerbit"
    }

    // Method untuk mengembalikan informasi umum tentang produk
    public function getInfoProduk() {
        // Menyusun informasi produk (judul, label, dan harga)
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
        return $str; // Mengembalikan string informasi produk
    }
}

// Mendefinisikan class CetakInfoProduk untuk mencetak informasi produk
class CetakInfoProduk {

    // Method cetak yang menerima object dari class Produk dan menampilkan informasi dasar produk
    public function cetak(Produk $produk) {
        // Menyusun informasi produk (judul, label, dan harga)
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str; // Mengembalikan string informasi produk
    }
}

// Class Komik yang merupakan turunan dari class Produk
class Komik extends Produk {
    // Override method getInfoProduk untuk komik
    public function getInfoProduk() {
        // Menyusun informasi lengkap untuk komik (judul, label, harga, dan jumlah halaman)
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str; // Mengembalikan string informasi komik
    }
}

// Class Game yang merupakan turunan dari class Produk
class Game extends Produk {
    // Override method getInfoProduk untuk game
    public function getInfoProduk() {
        // Menyusun informasi lengkap untuk game (judul, label, harga, dan waktu bermain)
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
        return $str; // Mengembalikan string informasi game
    }
}

// Membuat object Komik dengan data yang sesuai untuk judul, penulis, penerbit, harga, dan jumlah halaman
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0); 
// Membuat object Game dengan data yang sesuai untuk judul, penulis, penerbit, harga, dan waktu bermain
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);

// Menampilkan informasi lengkap produk komik 'Naruto'
echo $produk1->getInfoProduk();
echo "<hr>"; // Garis pemisah HTML
// Menampilkan informasi lengkap produk game 'Uncharted'
echo $produk2->getInfoProduk();

?>
