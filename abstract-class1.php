<?php

// Menggunakan alias untuk class CetakInfoProduk agar tidak terjadi konflik penamaan
use CetakInfoProduk as GlobalCetakInfoProduk;

// Definisi class abstrak Produk
abstract class Produk {
    // Property yang bersifat private, hanya dapat diakses melalui method getter & setter
    private $judul, 
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0; // Inisialisasi default diskon sebesar 0%
    
    // Konstruktor untuk menginisialisasi property ketika object dibuat
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0 ) {
        // Menggunakan setter untuk mengatur nilai property
        $this->judul = $judul; 
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Setter untuk property 'judul'
    public function setJudul( $judul ) { 
        $this->judul = $judul;
    }

    // Getter untuk property 'judul'
    public function getJudul() {
        return $this->judul; 
    }

    // Setter untuk property 'penulis'
    public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
    }

    // Getter untuk property 'penulis'
    public function getPenulis() {
        return $this->penulis;
    }

    // Setter untuk property 'penerbit'
    public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }
    
    // Getter untuk property 'penerbit'
    public function getPenerbit() {
        return $this->penerbit;
    }

    // Setter untuk property 'diskon'
    public function setDiskon( $diskon ) {
        $this->diskon = $diskon; 
    }

    // Getter untuk property 'diskon'
    public function getDiskon() {
        return $this->diskon;
    }

    // Setter untuk property 'harga'
    public function setHarga( $harga ) {
        $this->harga = $harga;
    }

    // Getter untuk property 'harga', dikurangi diskon jika ada
    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    // Method untuk mendapatkan label penulis dan penerbit
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // Deklarasi method abstrak getInfoProduk, yang harus diimplementasikan oleh class turunan
    abstract public function getInfoProduk();
    
    // Method umum untuk mendapatkan informasi produk dasar
    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
        return $str;
    }
}

// Class Komik merupakan turunan dari class Produk
class Komik extends Produk {
    public $jmlHalaman; // Property tambahan untuk jumlah halaman

    // Konstruktor yang mengisi property dari class induk dan tambahan jumlah halaman
    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0 ) {
        // Memanggil konstruktor class induk
        parent::__construct( $judul, $penulis, $penerbit, $harga );
        $this->jmlHalaman = $jmlHalaman;
    }

    // Implementasi method abstrak getInfoProduk khusus untuk komik
    public function getInfoProduk() {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

// Class Game merupakan turunan dari class Produk
class Game extends Produk {
    public $waktuMain; // Property tambahan untuk waktu bermain

    // Konstruktor yang mengisi property dari class induk dan tambahan waktu bermain
    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0 ) {
        // Memanggil konstruktor class induk
        parent::__construct( $judul, $penulis, $penerbit, $harga );
        $this->waktuMain = $waktuMain;
    }  
    
    // Implementasi method abstrak getInfoProduk khusus untuk game
    public function getInfoProduk() {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

// Class CetakInfoProduk untuk mencetak daftar produk
class CetakInfoProduk {
    public $daftarProduk = array(); // Menyimpan daftar produk

    // Method untuk menambahkan produk ke daftar
    public function tambahProduk( Produk $produk ) {
        $this->daftarProduk[] = $produk;
    }

    // Method untuk mencetak informasi dari semua produk di daftar
    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        // Loop melalui setiap produk dan tampilkan informasi produknya
        foreach( $this->daftarProduk as $p ) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str; // Mengembalikan string hasil cetakan
    }
}

// Contoh penggunaan class:
// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100); 
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );

// echo $cetakProduk->cetak(); // Mencetak daftar produk

?>
