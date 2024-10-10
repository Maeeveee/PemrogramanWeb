<?php
    $umur;
    $data = array("nama"=>"Jane","usia"=>25);
    if (isset($data["nama"])) {
        echo "Nama: ".$data["nama"]."<br>";
    }else{
        echo "Variabel 'nama' tidak ditemukan didalam array.";
    }
    if (isset($umur)&&$umur >= 18) {
        echo "Anda Sudah Dewasa.";
    }else{
        echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
    }
?>