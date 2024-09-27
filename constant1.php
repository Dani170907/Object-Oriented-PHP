<?php

// Mendefinisikan sebuah constant dengan nama 'NAMA' dan nilai 'Dani Ramadhan'
// Constant tidak dapat diubah setelah didefinisikan
// define('NAMA', 'Dani Ramadhan'); 
// echo NAMA; // Menampilkan nilai constant NAMA, yaitu 'Dani Ramadhan'

// echo "<br>"; // Baris baru untuk pemisah

// Mendefinisikan constant menggunakan keyword 'const'
// const UMUR = 17; 
// echo UMUR; // Menampilkan nilai constant UMUR, yaitu 17

// Mendefinisikan sebuah constant di dalam class menggunakan 'const'
class Test {
    const NAMA = 'Dani'; // Mendefinisikan constant NAMA dengan nilai 'Dani' di dalam class
}

// Mengakses constant di dalam class dengan sintaks NamaClass::ConstantName
echo Test::NAMA; // Menampilkan nilai constant NAMA di dalam class Coba, yaitu 'Dani'

// Menampilkan nama file PHP yang sedang dieksekusi
echo __FILE__; // Menampilkan path lengkap dari file yang sedang dieksekusi, menggunakan magic constant __FILE__

// Definisi fungsi yang mengembalikan nama fungsi itu sendiri
function coba() {
    return __FUNCTION__; // Magic constant __FUNCTION__ mengembalikan nama fungsi tempat ia dipanggil
}

// Memanggil fungsi coba() yang mengembalikan namanya
echo coba(); // Menampilkan 'coba', yaitu nama fungsi yang dipanggil

// Definisi class Coba dengan property yang berisi magic constant __CLASS__
class Coba {
    public $kelas = __CLASS__; // __CLASS__ adalah magic constant yang mengembalikan nama class
}

// Membuat object baru dari class Coba
$obj = new Coba;

// Menampilkan nilai dari property $kelas yang berisi nama class
echo $obj->kelas; // Menampilkan 'Coba', karena __CLASS__ akan mengembalikan nama class tersebut
?>
