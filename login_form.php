<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once 'Includes/config_session_inc.php';
    require_once 'Includes/sign_up_view.php';
    require_once "Includes/login_view.php"
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="krzys_site.css">
    <title> Krzys-App </title>
</head>

<body>
    <div class="background_experience">
        <nav class="navbar">
            <div class="banner">
                <div class="logo_login">
                    <a href="krzys-site.php#main_page">
                        Krzys-App Website
                        <img src="Assets/logo_png.png" class = "logo_png">
                    </a>
                </div>
            </div>
        </nav>
        <section id="main_page">
            <div class="content">

            <?php
                check_signup_errors();
            ?>
                <div class="container my-5">
                    <div
                        class="row row-cols-4"
                    >   
                        <div class="col col-3"></div>
                        <div class="col col-3 justify-content-center login_field fw-bolder text-center h4 p-2 m-2 border border-white border-3 rounded">
                            <div class="h2 fw-bolder text-center">Log-in Form <br></div>
                            <form action="Includes/login_inc.php" method="post">
                            Login:
                            <div class="input_field h5 mt-2">
                                <input type="text" name="username" class="p-1 someInput w-100" required>
                            </div>
                            Password:
                            <div class="input_field h5 mt-2">
                                <input type="password" name="pwd" class="p-1 someInput w-100" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3"> Log in </button>
                            </form>
                        </div>
                        <div class="col col-3 justify-content-center sign_up_field fw-bolder text-center h4 p-2 m-2 border border-white border-3 rounded">
                        <div class="h2 fw-bolder text-center">Sign-Up Form <br></div>
                        <form action="Includes/sign_up_inc.php" method="post">
                            Username:
                            <div class="input_field h5 mt-2">
                                <input type="text" name="username" class="p-1 someInput w-100" required>
                            </div>
                            Password:
                            <div class="input_field h5 mt-2">
                                <input type="password" name="pwd" class="p-1 someInput w-100" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3"> Sign in </button>
                            </form>
                        </div>
                        <div class="col col-3"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

<?php
    $pwd = "";
    $options = [
        'cost' => 12
    ];
    $hash_pass = password_hash($pwd, PASSWORD_BCRYPT, $options);
    
?>