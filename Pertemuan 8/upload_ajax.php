<?php
if (isset($_FILES['file'])) {
    $errors = [];
    $targetDirectory = "documents/";
    $extensions = ["pdf", "doc", "docx", "txt", "jpg", "jpeg", "png"];
    $totalFiles = count($_FILES['file']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $file_name = $_FILES['file']['name'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_tmp = $_FILES['file']['tmp_name'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $targetFile = $targetDirectory . $file_name;

        if (!in_array($file_ext, $extensions)) {
            $errors[] = "Ekstensi tidak diizinkan: $file_name";
        } elseif ($file_size > 2097152) {
            $errors[] = "Ukuran file terlalu besar: $file_name";
        } elseif (!move_uploaded_file($file_tmp, $targetFile)) {
            $errors[] = "Gagal mengunggah file: $file_name";
        } else {
            echo "File $file_name berhasil diunggah.<br>";
        }
    }

    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
