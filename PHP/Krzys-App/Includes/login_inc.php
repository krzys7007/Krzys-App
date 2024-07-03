<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST'){

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try{

        require_once 'mysql_connection.php';
        require_once 'login_model.php';
        require_once 'login_contr.php';

        // ERROR HANDLERS
        $errors = [];
        if (is_input_empty($username, $pwd)){
            $errors["empty_input"] = "Fill in all fields.";
        }

        $result = get_user($pdo,$username);
        if (is_username_wrong($result)){
            $errors["login_incorrect"] = "Incorrect login.";
        }

        if (!is_username_wrong($result) && is_password_wrong($pwd, $result["password"])){
            $errors["login_incorrect"] = "Incorrect login.";
        }

        require_once 'config_session_inc.php';

        if ($errors){
            $_SESSION["errors_login"] = $errors;
            header("Location: ../login_form.php");
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . '_' . $result["id_guests"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id_guests"];
        $_SESSION["username"] = htmlspecialchars($result["username"]);
        $_SESSION["last_session"] = time();

        header("Location: ../krzys-site.php?login=success");
        $pdo = NULL;
        $stmt = NULL;
        die();

    }catch(PDOException $e){
        die("Query failed: " . $e->getMessage());
    }

}else{
    header("Location: ../krzys-site.php");
    die();
}

?>