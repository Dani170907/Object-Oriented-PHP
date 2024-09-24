<?php

class Produk {
    // Deklarasi properti private yang tidak dapat diakses langsung dari luar class.
    private $judul, 
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;
    
    // Constructor yang akan dijalankan saat object baru dibuat, menerima 4 parameter.
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0 ) {
        // Menginisialisasi properti dengan nilai dari parameter yang diterima.
        $this->judul = $judul; 
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Setter untuk mengubah nilai judul produk.
    public function setJudul( $judul ) { 
        $this->judul = $judul;
    }

    // Getter untuk mendapatkan nilai judul produk.
    public function getJudul() {
        return $this->judul; 
    }

    // Setter untuk mengubah nilai penulis produk.
    public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
    }

    // Getter untuk mendapatkan nilai penulis produk.
    public function getPenulis() {
        return $this->penulis;
    }

    // Setter untuk mengubah nilai penerbit produk.
    public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }

    // Getter untuk mendapatkan nilai penerbit produk.
    public function getPenerbit() {
        return $this->penerbit;
    }

    // Setter untuk mengatur diskon pada produk.
    public function setDiskon( $diskon ) {
        $this->diskon = $diskon; 
    }

    // Getter untuk mendapatkan nilai diskon produk.
    public function getDiskon() {
        return $this->diskon;
    }

    // Setter untuk mengubah nilai harga produk.
    public function setHarga( $harga ) {
        $this->harga = $harga;
    }

    // Getter untuk mendapatkan harga produk setelah diskon.
    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    // Method untuk mengembalikan label produk berupa penulis dan penerbit.
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // Method untuk mengembalikan informasi lengkap produk (judul, label, dan harga sebelum diskon).
    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
        return $str;
    }
}

class CetakInfoProduk {

    // Method untuk mencetak informasi produk, menerima objek Produk sebagai parameter.
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

        // Menginisialisasi properti jmlHalaman.
        $this->jmlHalaman = $jmlHalaman;
    }

    // Override method getInfoProduk untuk menambahkan informasi jumlah halaman komik.
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

        // Menginisialisasi properti waktuMain.
        $this->waktuMain = $waktuMain;
    }

    // Override method getInfoProduk untuk menambahkan informasi waktu bermain game.
    public function getInfoProduk()
    {
        // Menggabungkan informasi dari method parent dan menambahkan waktu main.
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
echo "<hr>"; // Membuat garis horizontal pada output.

// Mengubah penulis dari produk Komik menjadi "Dani Ramadhan".
$produk1->setPenulis("Dani Ramadhan");

// Menampilkan penulis baru untuk produk Komik.
echo $produk1->getPenulis();
