<?php

    $servername = "localhost";
    $username = "root";
    $userpass = "";
    
    try {
        $dbcon = new PDO("mysql:host=$servername; dbname=$dbname", $username, $userpass);
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        echo "Faild to connect to database ". $e->getMessage();

    }
?>
