<?php

// Definisi class ContohStatic
class ContohStatic {
    // Deklarasi property static, artinya nilai $angka akan di-share di seluruh object dari class ini
    public static $angka = 1;

    // Definisi method static, bisa diakses tanpa membuat instance dari class
    public static function halo() {
        // Mengembalikan string "Halo." ditambah dengan nilai dari self::$angka yang kemudian di-increment
        return "Halo. " . self::$angka++ . " Kali";
    }
}

// Mengakses property static $angka dari class ContohStatic
echo ContohStatic::$angka; // Menampilkan 1, karena ini adalah nilai awal dari $angka
echo "<br>";

// Memanggil method static halo() yang mengembalikan string "Halo. 1 Kali"
echo ContohStatic::halo(); // Menampilkan "Halo. 1 Kali", dan $angka di-increment menjadi 2
echo "<br>";    

// Memanggil method static halo() lagi yang kali ini mengembalikan "Halo. 2 Kali"
echo ContohStatic::halo(); // Menampilkan "Halo. 2 Kali", dan $angka di-increment menjadi 3
echo "<hr>"; // Garis pemisah menggunakan HTML

// Definisi class Contoh
class Contoh {
    // Deklarasi property static $nomor, yang akan di-share oleh semua instance class
    public static $nomor = 1;

    // Definisi method non-static
    public function hai() {
        // Mengembalikan string "Hai." ditambah dengan nilai self::$nomor, yang di-increment setiap kali dipanggil
        return "Hai. " . self::$nomor++ . " Kali<br>";
    }
}

// Membuat instance baru dari class Contoh
$obj = new Contoh;

// Memanggil method hai() tiga kali berturut-turut
// Karena property $nomor adalah static, setiap kali method hai() dipanggil, nilai $nomor bertambah
echo $obj->hai(); // Menampilkan "Hai. 1 Kali"
echo $obj->hai(); // Menampilkan "Hai. 2 Kali"
echo $obj->hai(); // Menampilkan "Hai. 3 Kali"

echo "<br>"; // Baris baru untuk pemisah

// Membuat instance kedua dari class Contoh
$obj2 = new Contoh();

// Memanggil method hai() tiga kali dengan instance $obj2
// Property $nomor tetap di-share oleh semua object, sehingga nilai $nomor melanjutkan dari instance sebelumnya
echo $obj2->hai(); // Menampilkan "Hai. 4 Kali"
echo $obj2->hai(); // Menampilkan "Hai. 5 Kali"
echo $obj2->hai(); // Menampilkan "Hai. 6
