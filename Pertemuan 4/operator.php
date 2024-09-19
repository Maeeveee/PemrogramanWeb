<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "hasil tambah = $hasilTambah <br>";
echo "kurang = $hasilKurang <br>";
echo "kali = $hasilKali <br>";
echo "bagi = $hasilBagi <br>";
echo "sisa bagi = $sisaBagi <br>";
echo "pangkat = $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "hasil sama = $hasilSama <br>";
echo "hasil tidak sama = $hasilTidakSama <br>";
echo "hasil lebih kecil = $hasilLebihKecil <br>";
echo "hasil lebih besar = $hasilLebihBesar <br>";
echo "hasil lebih kecil sama = $hasilLebihKecilSama <br>";
echo "hasil lebih besar sama = $hasilLebihBesarSama <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "hasil and = $hasilAnd <br>";
echo "hasil or = $hasilOr <br>";
echo "hasil not a = $hasilNotA <br>";
echo "hasil not b = $hasilNotB <br>";

echo " ".$a += $b." ";
echo "<br>";
echo " ".$a -= $b." ";
echo "<br>";
echo " ".$a *= $b." ";
echo "<br>";
echo " ".$a /= $b." ";
echo "<br>";
echo " ".$a %= $b." ";
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "hasil identik = $hasilIdentik <br>";
echo "tidak identik = $hasilTidakIdentik <br>";

$totalKursi = 45;
$kursiTerpakai = 28;

echo "persentase kursi terpakai = ".($kursiTerpakai / $totalKursi * 100)."%";
?>