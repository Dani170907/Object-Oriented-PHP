<?php

// Mendefinisikan class Produk yang merepresentasikan produk
class Produk {
    // Property yang akan diisi dengan nilai dari constructor
    public $judul, // Judul produk
           $penulis, // Penulis produk
           $penerbit, // Penerbit produk
           $harga = 0; // Harga produk, nilai default 0

    // Constructor untuk menerima parameter dan menginisialisasi property object
    // Jika tidak ada nilai yang diberikan, akan menggunakan nilai default
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
        // Mengisi property class dengan nilai dari parameter
        $this->judul = $judul; // Mengisi property 'judul'
        $this->penulis = $penulis; // Mengisi property 'penulis'
        $this->penerbit = $penerbit; // Mengisi property 'penerbit'
        $this->harga = $harga; // Mengisi property 'harga'
    }

    // Method untuk mengembalikan label produk yang terdiri dari penulis dan penerbit
    public function getLabel() {
        // Mengembalikan string dengan format "penulis, penerbit"
        return "$this->penulis, $this->penerbit";
    }
}

// Mendefinisikan class CetakInfoProduk untuk mencetak informasi produk
class CetakInfoProduk {
    // Method cetak untuk mencetak detail produk
    // Parameter $produk harus berupa instance dari class Produk
    public function cetak( Produk $produk ) {
        // Menggabungkan properti dari produk (judul, penulis, penerbit, dan harga) ke dalam satu string
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        // Mengembalikan string yang sudah terbentuk
        return $str;
    }
}

// Membuat object Produk dengan mengirimkan nilai parameter ke constructor
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000); // Produk 1 adalah komik dengan informasi lengkap
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000); // Produk 2 adalah game dengan informasi lengkap

// Menampilkan label produk 'Naruto' menggunakan method getLabel
echo "Komik : " . $produk1->getLabel();
echo "<hr>"; // Membuat garis horizontal di HTML
// Menampilkan label produk 'Uncharted' menggunakan method getLabel
echo "Game : " . $produk2->getLabel();
echo "<hr>"; // Membuat garis horizontal di HTML

// Membuat instance dari class CetakInfoProduk untuk mencetak detail produk
$infoProduk1 = new CetakInfoProduk();
// Mencetak detail produk 'Naruto' menggunakan method cetak() dan menampilkan hasilnya
echo $infoProduk1->cetak($produk1);

?>
