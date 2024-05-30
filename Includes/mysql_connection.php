<?php
    ini_set('display_errors', '1');

    ini_set('display_startup_errors', '1');

    error_reporting(E_ALL);

    $dbServerName = "localhost";
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