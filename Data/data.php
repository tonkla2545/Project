<?php

    $servername = "localhost";
    $username = "root";
    $userpass = "";
    $dbname = "dbstord";
    

    $dbcon = mysqli_connect($servername, $username, $userpass, $dbname);


    // try {
    //     $dbcon = new PDO($servername, $dbname, $username, $userpass);
    //     $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // } catch(PDOException $e) {
    //     echo "Faild to connect to database ". $e->getMessage();

    // }
?>
