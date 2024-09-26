<?php

function perkenalan($nama,$salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br>";
    echo "Senang berkenalan dengan anda<br>";
    echo "Saya berusia ". hitungUmur(2005, 2024)." Tahun<br>";
    echo "Senang berkenalan dengan anda";
}
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

perkenalan("Rizal","Hallo");

echo "<hr>";

?>