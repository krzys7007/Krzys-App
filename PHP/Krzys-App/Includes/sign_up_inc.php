<?php

if ($_SERVER["REQUEST_METHOD"] === 'POST'){

$username = $_POST["username"];
$pwd = $_POST["pwd"];
$ip = "Test";

try{

    require_once 'mysql_connection.php';
    require_once 'sign_up_model.php';
    require_once 'sign_up_contr.php';

    // ERROR HANDLERS
    $errors = [];
    if (is_input_empty($username, $pwd)){
        $errors["empty_input"] = "Fill in all fields.";
    }
    if (is_username_taken($pdo, $username)){
        $errors["username_taken"] = "Username taken.";
    }

    require_once 'config_session_inc.php';

    if ($errors){
        $_SESSION["errors_singup"] = $errors;
        header("Location: ../login_form.php");
        die();
    }

    create_user($pdo, $username, $pwd, $ip);
    header("Location: ../krzys-site.php?signup=success");
    $pdo = NULL;
    $stmt = NULL;
    die();

}catch(PDOException $e){
    die("Query failed: " . $e->getMessage());
}

}else{
    header("Location: ../login_form.php");
    die();
}

?>