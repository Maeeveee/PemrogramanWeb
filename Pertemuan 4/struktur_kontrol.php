<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
}elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
}elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
}elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "atlet tersebut memerlukan $hari hari untuk mencapai jarak $jarakTarget kilometer <br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for($i=1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman); 
}
echo "Jumlah buah yang akan dipanen adalah $jumlahBuah buah <br>";

$skorUjian = [85,92,78,96,88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor <br>";

$nilaiSiswa = [85,92,58,64,90,55,88,79,70,96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai $nilai (Lulus) <br>";
}

$nilaiSiswaSoal = [85,92,78,64,90,75,88,79,70,96];

sort($nilaiSiswaSoal);

$nilaiYangTersisa = array_slice($nilaiSiswaSoal,2,6);
$totalNilai = 0;

foreach ($nilaiYangTersisa as $nilai) {
    $totalNilai += $nilai;
}
$rataRata = $totalNilai / count($nilaiYangTersisa);
echo "Nilai rata-rata yang tersisa adalah $rataRata <br>";

$hargaProduk = 120000;

if ($hargaProduk > 100000) {
    $hargaProduk *= 0.8;
}
echo "Harga final produk adalah $hargaProduk<br>";

$poin = 520; 

$hadiah = ($poin > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: " . $poin . "\n";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiah . "\n";
?>