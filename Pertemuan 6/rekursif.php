<?php
    function tampilkanHaloDunia(){
        echo "Hallo dunia!<br>";
    }
    tampilkanHaloDunia();

    function tampilkanAngka(int $jumlah, int $indeks=1){
        echo "perulangan indeks ke {$indeks}<br>";

        if($indeks < $jumlah){
            tampilkanAngka($jumlah, $indeks+1);
        }
    }
    tampilkanAngka(20);
?>