<?php
       function hitungUmur($thnLahir, $thnSekarang) {
        $umur = $thnSekarang - $thnLahir;
        return $umur;
    }
   function perkenalan($nama, $salam="Assalamualaikum") {
        echo $salam.", ";
        echo "Perkenalan nama saya ".$nama."<br>";
        echo "Umur Saya adalah ".hitungUmur(2005, 2024)."<br>";
        echo "Senang berkenalan dengan anda<br>";
    }


    echo"<hr>";
    $saya = "Elok";
    $salam = "Selamat Datang";

    perkenalan($saya);
?>