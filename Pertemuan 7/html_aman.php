<?php
    if (isset($_POST['input'])) {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    } else {
        echo "Input tidak ditemukan.<br>";
    }

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "email vaild";
        }else {
            echo "Email tidak valid.";
        }
    }else {
        echo "email tidak ditemukan.";
    }
?>