<?php

// Mendefinisikan class Produk untuk merepresentasikan produk secara umum
class Produk {
    // Property yang merepresentasikan atribut produk
    public $judul,         // Judul dari produk
           $penulis,       // Penulis atau pembuat produk
           $penerbit,      // Penerbit atau perusahaan yang menerbitkan produk
           $harga = 0,     // Harga produk, default 0
           $jmlHalaman,    // Jumlah halaman (khusus untuk komik)
           $waktuMain,     // Waktu bermain (khusus untuk game)
           $tipe;          // Tipe produk, misalnya 'Komik' atau 'Game'
    
    // Constructor untuk menerima parameter dan menginisialisasi property object
    // Jika parameter tidak diberikan, akan menggunakan nilai default
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
        // Mengisi property class dengan nilai dari parameter yang diberikan saat object dibuat
        $this->judul = $judul;           // Mengisi property 'judul'
        $this->penulis = $penulis;       // Mengisi property 'penulis'
        $this->penerbit = $penerbit;     // Mengisi property 'penerbit'
        $this->harga = $harga;           // Mengisi property 'harga'
        $this->jmlHalaman = $jmlHalaman; // Mengisi property 'jmlHalaman', jika tipe produk adalah komik
        $this->waktuMain = $waktuMain;   // Mengisi property 'waktuMain', jika tipe produk adalah game
        $this->tipe = $tipe;             // Mengisi property 'tipe', yang bisa berupa 'Komik' atau 'Game'
    }

    // Method untuk mengembalikan label produk (penulis dan penerbit)
    public function getLabel() {
        // Mengembalikan string dengan format "penulis, penerbit"
        return "$this->penulis, $this->penerbit";
    }

    // Method untuk mengembalikan informasi lengkap tentang produk
    public function getInfoLengkap() {
        // Menyusun string yang berisi tipe, judul, label (penulis dan penerbit), dan harga
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";

        // Jika tipe produk adalah 'Komik', tambahkan jumlah halaman ke string
        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        }
        // Jika tipe produk adalah 'Game', tambahkan waktu bermain ke string
        elseif ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        // Mengembalikan string yang berisi informasi lengkap produk
        return $str;
    }
}

// Mendefinisikan class CetakInfoProduk untuk mencetak informasi produk sederhana
class CetakInfoProduk {
    // Method cetak menerima object dari class Produk dan menampilkan informasi dasar produk
    public function cetak(Produk $produk) {
        // Menyusun string yang berisi judul, label (penulis dan penerbit), dan harga
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        // Mengembalikan string yang sudah disusun
        return $str;
    }
}

// Membuat object Produk dengan tipe 'Komik'
// Mengisi nilai parameter sesuai dengan constructor: judul, penulis, penerbit, harga, jumlah halaman, waktu bermain, tipe
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik"); 
// Membuat object Produk dengan tipe 'Game'
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

// Menampilkan informasi lengkap produk 'Naruto' (tipe 'Komik')
echo $produk1->getInfoLengkap();
echo "<hr>"; // Membuat garis horizontal di HTML
// Menampilkan informasi lengkap produk 'Uncharted' (tipe 'Game')
echo $produk2->getInfoLengkap();

?>