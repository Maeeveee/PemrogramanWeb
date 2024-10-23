<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $alat = $_POST['alat'];
    $hari = $_POST['jumlahHari'];
    
    echo "<html>";
    echo "<head>";
    echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>";
    echo "<title>UTS</title>";
    echo "
    <style>
        body {
            background-image: url('gambar/gambarLangit.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            margin: 0;
        }
        .custom-container {
            width: 80%;
            max-width: 600px;
            margin: auto;
        }
    </style>
    ";
    echo "</head>";
    echo "<body>";
    echo "<div class='container mt-4 custom-container'>";
    echo "<h1 class='text-center mb-4 text-light'>Detail Penyewaan</h1>";
    echo "<div class='card p-4'>";
    echo "<h4>Nama Penyewa:</h4> <p>" . $username . "</p>";
    echo "<h4>Barang yang Disewa:</h4>";

    $totalHarga = 0;
    echo "<ul class='list-group mb-3'>";
    foreach ($alat as $item) {
        $jumlah = $_POST['jumlah_' . $item];
        if (isset($_POST['jumlah_' . $item])) {
            if ($item == 'tenda') {
                $harga = 50000 * $jumlah;
            } elseif ($item == 'matras') {
                $harga = 4000 * $jumlah;
            } elseif ($item == 'kompor') {
                $harga = 15000 * $jumlah;
            } elseif ($item == 'sleepingBag') {
                $harga = 8000 * $jumlah;
            }
            $totalHarga += $harga;
            echo "<li class='list-group-item'>- " . $item . " (Jumlah: " . $jumlah . ", Harga: Rp." . $harga. ")</li>";
        }
    }
    echo "</ul>";
    
    echo "<h4>Lama Menyewa:</h4> <p>" . $hari . " Hari</p>";
    echo "<h4 class='text-danger'>Total Bayar:</h4> <p><strong>Rp." . ($totalHarga * $hari) . "</strong></p>";
    
    echo "<a href='index.php' class='btn btn-primary mt-4'>Kembali</a>";
    echo "</div>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
}
?>
