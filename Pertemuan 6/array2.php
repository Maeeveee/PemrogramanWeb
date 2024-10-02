<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array 2</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: lightblue;
        }
        div{
            background-color: white;
            width: 200px;
            padding: 20px;
            border: solid 1px black;
        }
    </style>
</head>
<body>
    <div>
    <?php
        $dosen = ['Nama'=> 'Elok Nur Hamdana','domisili'=>'Malang','Jenis_kelamin' => 'Perempuan'];
        echo "Nama : {$dosen['Nama']}<br>";
        echo "Domisili : {$dosen['domisili']}<br>";
        echo "Jenis Kelamin : {$dosen['Jenis_kelamin']}<br>";
    ?>
    </div>
</body>
</html>