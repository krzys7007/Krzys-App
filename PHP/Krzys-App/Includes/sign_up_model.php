<?php 

declare(strict_types=1);

function get_username(object $pdo,string $username){
    $sql_querry = "SELECT username FROM guests WHERE username = :username;";
    $stmt = $pdo->prepare($sql_querry);
    $stmt->bindParam(":username",$username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo, string $username, string $pwd, string $ip){
    $sql_querry = $pdo->query("SELECT id_guests FROM guests ORDER BY id_guests;");
    $id = 0;
    while ($row = $sql_querry->fetch()) {
        if (strval($row['id_guests']) ===  strval($id)){
            $id = $id+1;
        }else{
            break;
        }
    }

    
    $sql_querry = "INSERT INTO guests (id_guests, username, password, IP) VALUES(:id, :username, :pwd, :IP);";
    $stmt = $pdo->prepare($sql_querry);

    $options = [
        'cost' => 12
    ];
    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":id",$id);
    $stmt->bindParam(":username",$username);
    $stmt->bindParam(":pwd",$hashedPwd);
    $stmt->bindParam(":IP",$ip);
    $stmt->execute();
    
}

?>