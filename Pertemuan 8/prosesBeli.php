<?php
    if(isset($_POST["beliNovel"])&&isset($_POST["belibuku"]));
    setcookie("beliNovel",$_POST["beliNovel"]);
    setcookie("beliBuku",$_POST["beliBuku"]);
    header("location:keranjangBelanja.php");
?>