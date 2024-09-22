<?php

// Mendefinisikan class Produk sebagai class induk untuk produk-produk umum
class Produk {
    // Property yang menggambarkan atribut umum dari sebuah produk
    public $judul,          // Judul produk, bisa berupa judul buku, komik, atau game
           $penulis,        // Nama penulis atau pembuat produk
           $penerbit,       // Nama penerbit atau perusahaan pembuat produk
           $harga;      // Harga produk,
    
    // Constructor untuk menginisialisasi property ketika object dibuat
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
        // Inisialisasi property dengan nilai parameter yang diberikan
        $this->judul = $judul; 
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Method untuk mendapatkan label berupa penulis dan penerbit
    public function getLabel() {
        return "$this->penulis, $this->penerbit"; // Mengembalikan string "penulis, penerbit"
    }

    // Method untuk menampilkan informasi produk dasar (judul, label, dan harga)
    public function getInfoProduk() {
        // Menyusun informasi produk dalam format string
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
        return $str; // Mengembalikan string informasi produk
    }
}

// Class CetakInfoProduk untuk mencetak informasi produk
class CetakInfoProduk {

    // Method untuk mencetak informasi produk
    public function cetak(Produk $produk) {
        // Menyusun informasi produk (judul, label, dan harga)
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str; // Mengembalikan string informasi produk
    }
}

// Class Komik yang mewarisi dari class Produk
class Komik extends Produk {
    public $jmlHalaman; // Property khusus untuk komik, yaitu jumlah halaman

    // Constructor untuk menginisialisasi object Komik
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0) {
        // Memanggil constructor dari class induk (Produk)
        parent::__construct($judul, $penulis, $penerbit, $harga);
        // Mengisi property jumlah halaman khusus untuk komik
        $this->jmlHalaman = $jmlHalaman;
    }

    // Override method getInfoProduk untuk menambahkan informasi jumlah halaman
    public function getInfoProduk() {
        // Menggunakan parent:: untuk memanggil method dari class induk
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str; // Mengembalikan string informasi produk komik dengan jumlah halaman
    }
}

// Class Game yang mewarisi dari class Produk
class Game extends Produk {
    public $waktuMain; // Property khusus untuk game, yaitu waktu main dalam jam

    // Constructor untuk menginisialisasi object Game
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0) {
        // Memanggil constructor dari class induk (Produk)
        parent::__construct($judul, $penulis, $penerbit, $harga);
        // Mengisi property waktu main khusus untuk game
        $this->waktuMain = $waktuMain;
    }

    // Override method getInfoProduk untuk menambahkan informasi waktu bermain
    public function getInfoProduk() {
        // Menggunakan parent:: untuk memanggil method dari class induk
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str; // Mengembalikan string informasi produk game dengan waktu bermain
    }
}

// Membuat object Komik dengan judul, penulis, penerbit, harga, dan jumlah halaman
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100); 
// Membuat object Game dengan judul, penulis, penerbit, harga, dan waktu bermain
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// Menampilkan informasi lengkap untuk produk komik 'Naruto'
echo $produk1->getInfoProduk();
echo "<hr>"; // Garis pemisah HTML
// Menampilkan informasi lengkap untuk produk game 'Uncharted'
echo $produk2->getInfoProduk();

?>
