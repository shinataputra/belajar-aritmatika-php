<?php

// Fungsi untuk melakukan penambahan
function tambah($angka1, $angka2) {
  return $angka1 + $angka2;
}

// Fungsi untuk melakukan pengurangan
function kurang($angka1, $angka2) {
  return $angka1 - $angka2;
}

// Fungsi untuk melakukan perkalian
function kali($angka1, $angka2) {
  return $angka1 * $angka2;
}

// Fungsi untuk melakukan pembagian
function bagi($angka1, $angka2) {
  return $angka1 / $angka2;
}

function tampil(){
  return "Selamat datang";
}

//Variable angka ke 1
$angka1 = 10;

//Variable angka ke 2
$angka2 = 5;


//menampilkan hasil aritmatika
echo "Hasil dari $angka1 + $angka2 adalah: " . tambah($angka1, $angka2) . "\n";
echo "Hasil dari $angka1 - $angka2 adalah: " . kurang($angka1, $angka2) . "\n";
echo "Hasil dari $angka1 x $angka2 adalah: " . kali($angka1, $angka2) . "\n";
echo "Hasil dari $angka1 / $angka2 adalah: " . bagi($angka1, $angka2) . "\n";
echo "ini dari funtion tampil ".tampil();

?>