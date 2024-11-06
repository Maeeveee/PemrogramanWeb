<?php
    include 'Connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Daftar Kontak</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Daftar Kontak</h1>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Telepon</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $contactQuery = "SELECT * FROM contacts";
                    $stmt = sqlsrv_query($conn, $contactQuery);

                    if ($stmt === false) {
                        die("Query failed: " . print_r(sqlsrv_errors(), true));
                    }
                    $no = 1;
                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $row['nomor_telepon'] . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>
                                <a href='Update.php?nomor_telepon=" . $row['nomor_telepon'] . "' class='btn btn-warning btn-sm'>Update</a>
                                <a href='Delete.php?nomor_telepon=" . $row['nomor_telepon'] . "' class='btn btn-danger btn-sm'>Delete</a>
                              </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <a href="Add.php" class="btn btn-primary">Tambah Kontak</a>
    </div>
</body>
</html>
