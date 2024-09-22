<?php

class Produk {
    // Deklarasi properti publik yang akan digunakan untuk menyimpan data produk.
    public $judul, 
           $penulis,
           $penerbit;

    // Properti protected untuk menyimpan diskon dan harga. Tidak bisa diakses dari luar class.
    protected $diskon = 0;
    protected $harga;

    // Constructor yang akan dieksekusi saat object baru dibuat, menerima 4 parameter.
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0 ) {
        // Menginisialisasi properti class dengan nilai dari parameter yang diterima.
        $this->judul = $judul; 
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Method untuk menghitung harga setelah diskon. Nilai harga dikurangi dengan persentase diskon.
    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    // Method untuk mengembalikan string yang berisi nama penulis dan penerbit.
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // Method untuk menampilkan informasi lengkap produk, menggabungkan judul, label, dan harga awal.
    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
        return $str;
    }
}

class CetakInfoProduk {
    // Method untuk mencetak informasi produk dalam format sederhana, hanya menampilkan judul dan harga.
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

class Komik extends Produk {
    // Properti tambahan untuk menyimpan jumlah halaman komik.
    public $jmlHalaman;

    // Constructor untuk Komik yang memanggil constructor dari class induk (Produk) dan menambah properti jmlHalaman.
    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0 ) {
        // Memanggil constructor parent dengan parameter yang sesuai.
        parent::__construct( $judul, $penulis, $penerbit, $harga );

        // Menginisialisasi properti jmlHalaman dengan nilai dari parameter.
        $this->jmlHalaman = $jmlHalaman;
    }

    // Override method getInfoProduk untuk menambahkan informasi jumlah halaman.
    public function getInfoProduk()
    {
        // Menggabungkan informasi dari method parent dan menambahkan jumlah halaman.
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    // Properti tambahan untuk menyimpan waktu bermain game.
    public $waktuMain;

    // Constructor untuk Game yang memanggil constructor dari class induk (Produk) dan menambah properti waktuMain.
    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0 ) {
        // Memanggil constructor parent dengan parameter yang sesuai.
        parent::__construct( $judul, $penulis, $penerbit, $harga );

        // Menginisialisasi properti waktuMain dengan nilai dari parameter.
        $this->waktuMain = $waktuMain;
    }

    // Method untuk mengatur nilai diskon, karena properti diskon bersifat protected.
    public function setDiskon( $diskon ) {
        // Mengubah nilai diskon berdasarkan input parameter.
        $this->diskon = $diskon; 
    }

    // Override method getInfoProduk untuk menambahkan informasi waktu bermain game.
    public function getInfoProduk()
    {
        // Menggabungkan informasi dari method parent dan menambahkan waktu bermain.
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

// Membuat object Komik dengan judul "Naruto", penulis "Masashi Kishimoto", penerbit "Shonen Jump", harga 30000, dan jumlah halaman 100.
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100); 

// Membuat object Game dengan judul "Uncharted", penulis "Neil Druckmann", penerbit "Sony Computer", harga 250000, dan waktu main 50 jam.
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// Menampilkan informasi produk Komik.
echo $produk1->getInfoProduk();
echo "<br>"; // Membuat baris baru pada output.

// Menampilkan informasi produk Game.
echo $produk2->getInfoProduk();
echo "<hr>"; // Membuat garis horizontal pada output.

// Mengatur diskon 50% untuk produk Game.
$produk2->setDiskon(50);

// Menampilkan harga Game setelah diskon.
echo $produk2->getHarga();
