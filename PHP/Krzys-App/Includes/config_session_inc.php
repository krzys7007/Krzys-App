<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => '172.18.0.2',
    'path' => '/',
    'secure' => false,
    'httponly' => true,
    'samesite' => 'Lax'
]);

session_start();

if (isset($_SESSION["user_id"])){

    if (!isset($_SESSION["last_session"])) {
        regenerate_session_id_login();

    }else{
        $interval = 60 * 30;
        if (time() - $_SESSION["last_session"] >= $interval){
            regenerate_session_id_login();
        }
    }

}else{

    if (!isset($_SESSION["last_session"])) {
        regenerate_session_func();

    }else{
        $interval = 60 * 30;
        if (time() - $_SESSION["last_session"] >= $interval){
            regenerate_session_func();
        }
    }
}

function regenerate_session_func(){
    session_regenerate_id(true);
    $_SESSION["last_session"] = time();
}

function regenerate_session_id_login(){
    session_regenerate_id(true);

    $userId = $_SESSION["user_id"];
    $newSessionId = session_create_id();
    $sessionId = $newSessionId . '_' . $userId;
    session_id($sessionId);

    $_SESSION["last_session"] = time();
}

?>

