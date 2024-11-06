<?php
include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomor_telepon = $_POST['nomor_telepon'];
    $nama = $_POST['nama'];

    $insertQuery = "INSERT INTO contacts (nomor_telepon, nama) VALUES (?, ?)";
    $params = array($nomor_telepon, $nama);
    $stmt = sqlsrv_query($conn, $insertQuery, $params);

    if ($stmt === false) {
        die("Insert failed: " . print_r(sqlsrv_errors(), true));
    } else {
        header("Location: Index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Tambah Kontak</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Tambah Kontak Baru</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nomor_telepon" class="form-label">Nomor Telepon:</label>
                <input type="text" id="nomor_telepon" name="nomor_telepon" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Kontak</button>
        </form>
        <br>
        <a href="Index.php" class="btn btn-secondary">Kembali ke Daftar Kontak</a>
    </div>
</body>
</html>
