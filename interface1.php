<?php

// Interface yang mendefinisikan method getInfoProduk
interface InfoProduk {
    // Method ini harus diimplementasikan oleh kelas yang menggunakan interface ini
    public function getInfoProduk();
}

// Abstract class Produk yang akan menjadi parent class untuk Komik dan Game
abstract class Produk {
    // Properti yang bersifat protected, hanya bisa diakses dari dalam class ini atau turunannya
    protected $judul, 
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;
           
    // Constructor untuk menginisialisasi nilai properti saat objek dibuat
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0 ) {
        $this->judul = $judul; 
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Setter dan Getter untuk judul
    public function setJudul ( $judul ) { 
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul; 
    }

    // Setter dan Getter untuk penulis
    public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    // Setter dan Getter untuk penerbit
    public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }
    
    public function getPenerbit() {
        return $this->penerbit;
    }

    // Setter dan Getter untuk diskon
    public function setDiskon( $diskon ) {
        $this->diskon = $diskon; 
    }

    public function getDiskon() {
        return $this->diskon;
    }

    // Setter dan Getter untuk harga, dengan perhitungan diskon saat mengambil harga
    public function setHarga( $harga ) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    // Mengembalikan label berisi penulis dan penerbit
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // Method abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function getInfo();
    
}

// Kelas Komik yang merupakan turunan dari Produk dan mengimplementasikan interface InfoProduk
class Komik extends Produk implements InfoProduk {
    public $jmlHalaman; // Properti khusus untuk Komik

    // Constructor yang menginisialisasi properti Komik dan memanggil constructor parent
    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga ); // Memanggil constructor Produk
        $this->jmlHalaman = $jmlHalaman;
    }

    // Implementasi dari method abstrak getInfo yang ada di Produk
    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
        return $str;
    }

    // Implementasi dari method getInfoProduk() yang didefinisikan di interface
    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

// Kelas Game yang merupakan turunan dari Produk dan mengimplementasikan interface InfoProduk
class Game extends Produk implements InfoProduk {
    public $waktuMain; // Properti khusus untuk Game

    // Constructor yang menginisialisasi properti Game dan memanggil constructor parent
    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga ); // Memanggil constructor Produk
        $this->waktuMain = $waktuMain;
    }  

    // Implementasi dari method abstrak getInfo yang ada di Produk
    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
        return $str;
    }
    
    // Implementasi dari method getInfoProduk() yang didefinisikan di interface
    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

// Kelas untuk mencetak informasi produk
class CetakInfoProduk {
    public $daftarProduk = array(); // Array untuk menyimpan daftar produk

    // Method untuk menambahkan produk ke dalam daftar
    public function tambahProduk( Produk $produk ) {
        $this->daftarProduk[] = $produk;
    }

    // Method untuk mencetak semua produk yang ada dalam daftar
    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        // Looping untuk mencetak setiap produk
        foreach( $this->daftarProduk as $p ) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}

// Membuat instance dari Komik dan Game
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100); 
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// Membuat instance dari CetakInfoProduk dan menambahkan produk
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );

// Mencetak daftar produk
echo $cetakProduk->cetak();

?>
