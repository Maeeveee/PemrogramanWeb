<?php

$a = 10;
$b = 5;
$c = $a + $b;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variabel a: {$a} <br>";
echo "Variabel a: {$b} <br>";
echo "Variabel a: {$c} <br>";
echo "Variabel a: {$d} <br>";
echo "Variabel a: {$e} <br>";

var_dump($e);

$nilaiMatematika = 5.1;
$nilaiIpa = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIpa + $nilaiBahasaIndonesia) / 3;

echo "<br> Matematika: {$nilaiMatematika} <br>";
echo "Ipa: {$nilaiIpa} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";

var_dump($rataRata);

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

echo "<br>";
var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

$namaDepan = "Ibnu";
$namaBelakang = "Jakaria";

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . " " . $namaBelakang;

echo "<br> Nama Depan: {$namaDepan} <br>";
echo "Nama Belakang: {$namaBelakang} <br>";
echo $namaLengkap;
echo "<br>";

$listMahasiswa = ["Wahid Abdullah","Elmo bachtiar","Lendis Fabri"];
echo $listMahasiswa[0];
?>