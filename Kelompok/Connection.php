<?php
    $serverName = "MAEVE";
    $databaseName = "contact";
    $username = "rizal";
    $password = "1234";

    $connectionOption = array("Database"=> $databaseName, "UID"=>$username, "PWD"=>$password);

    $conn = sqlsrv_connect($serverName, $connectionOption);

    if ($conn === false) {
        die("connection failed : ".print_r(sqlsrv_errors(), true));
    }

?>