<?php

    $servername = "localhost";
    $username = "root";
    $userpass = "";
    $dbname = "dataproject";
    
    try {
        $dbcon = new PDO("mysql:host=$servername; dbname=$dbname", $username, $userpass);
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Faild to connect to database ". $e->getMessage();

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data_project</title>
</head>
<body>
    
</body>
</html>