<?php
include 'Connection.php';

if (isset($_GET['nomor_telepon'])) {
    $nomor_telepon = $_GET['nomor_telepon'];

    $deleteQuery = "DELETE FROM contacts WHERE nomor_telepon = ?";
    $stmt = sqlsrv_query($conn, $deleteQuery, array($nomor_telepon));

    if ($stmt === false) {
        die("Delete failed: " . print_r(sqlsrv_errors(), true));
    } else {
        header("Location: Index.php");
        exit;
    }
}
?>
