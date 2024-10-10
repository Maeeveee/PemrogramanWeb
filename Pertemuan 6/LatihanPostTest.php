<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#kotak2").slideToggle("slow");
            })
        })
    </script>
    <style>
        table{
    border-collapse:collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th,td{
    text-align: left;
    padding: 10px;
}

tr:nth-child(even){
    background-color: #f2f2f2;
}

#kotak2, #flip{
    padding: 5px;
    text-align: center;
    background-color: #a7dbd8;
    border: solid 2px #e0e4cc;
    border-radius: 5px;
}

#kotak2{
    padding: 50px;
}
    </style>

</head>
<body>
    <h2>Data Siswa</h2>
    <div id="flip">klik</div>
    <div id="kotak2">
    <table>
    <tr>
           <th>Nama</th> 
           <th>Umur</th>
           <th>Kelas</th>
           <th>Alamat</th>
    </tr>
    <?php
            $dataSiswa = array(array("Andi",15,"10A","Malang"),
                           array("Siti",16,"10B","Batu"),
                           array("Budi",15,"10A","Dinoyo"),
                           array("Anton",25,"15A","Dinoyo"));   
            foreach ($dataSiswa as $siswa) {
                echo "<tr>";
                echo "<td>".$siswa[0]."</td>";
                echo "<td>".$siswa[1]."</td>";
                echo "<td>".$siswa[2]."</td>";
                echo "<td>".$siswa[3]."</td>";
                echo "<tr>";
            }
            echo "Rata Rata Umur ".$hitung = ($dataSiswa[0][1]+$dataSiswa[1][1]+$dataSiswa[2][1]+$dataSiswa[3][1])/4;;    
        ?>
        </table>
    </div>
</body>
</html>