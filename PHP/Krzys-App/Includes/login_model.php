<?php

declare(strict_types=1);

function get_user(object $pdo,string $username){
    $sql_querry = "SELECT * FROM guests WHERE username = :username;";
    $stmt = $pdo->prepare($sql_querry);
    $stmt->bindParam(":username",$username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}


?>