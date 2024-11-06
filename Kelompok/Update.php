<?php
include 'Connection.php';

if (isset($_GET['nomor_telepon'])) {
    $nomor_telepon = $_GET['nomor_telepon'];

    $query = "SELECT * FROM contacts WHERE nomor_telepon = ?";
    $stmt = sqlsrv_query($conn, $query, array($nomor_telepon));

    if ($stmt === false) {
        die("Query failed: " . print_r(sqlsrv_errors(), true));
    }

    $contact = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
    if (!$contact) {
        echo "Kontak tidak ditemukan.";
        exit;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomor_telepon_baru = $_POST['nomor_telepon'];
    $nama = $_POST['nama'];

    $updateQuery = "UPDATE contacts SET nomor_telepon = ?, nama = ? WHERE nomor_telepon = ?";
    $params = array($nomor_telepon_baru, $nama, $nomor_telepon);
    $stmt = sqlsrv_query($conn, $updateQuery, $params);

    if ($stmt === false) {
        die("Update failed: " . print_r(sqlsrv_errors(), true));
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
    <title>Update Kontak</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Update Kontak</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nomor_telepon" class="form-label">Nomor Telepon:</label>
                <input type="text" id="nomor_telepon" name="nomor_telepon" class="form-control" value="<?php echo $contact['nomor_telepon']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $contact['nama']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Kontak</button>
        </form>
        <br>
        <a href="Index.php" class="btn btn-secondary">Kembali ke Daftar Kontak</a>
    </div>
</body>
</html>
