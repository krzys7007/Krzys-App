<?php
    include_once 'Includes/config_session_inc.php';

    $dbServerName = "apachedocker-db-1";
    $dbUsername = "admin";
    $dbPassword = "admin";
    $dbDatabase = "KrzysiuApp";

    try{
        $pdo = new PDO("mysql:host=$dbServerName;dbname=$dbDatabase", $dbUsername, $dbPassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die("Connection failed: " . $e -> getMessage());
    }

?>
