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

// Input manual
echo "Masukkan angka pertama: ";
$angka1 = (int) fgets(STDIN);

echo "Masukkan angka kedua: ";
$angka2 = (int) fgets(STDIN);

// Contoh penggunaan fungsi
echo "Hasil dari $angka1 + $angka2 adalah: " . tambah($angka1, $angka2) . "\n";
echo "Hasil dari $angka1 - $angka2 adalah: " . kurang($angka1, $angka2) . "\n";
echo "Hasil dari $angka1 x $angka2 adalah: " . kali($angka1, $angka2) . "\n";
echo "Hasil dari $angka1 / $angka2 adalah: " . bagi($angka1, $angka2) . "\n";

?>