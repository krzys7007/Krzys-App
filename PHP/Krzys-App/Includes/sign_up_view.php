<?php 

    declare(strict_types=1);

    function check_signup_errors(){
        if (isset($_SESSION['errors_singup'])) {
            echo "test";
            $errors = $_SESSION['errors_singup'];

            echo "<br>";
            foreach($errors as $error){
                echo '<p class="form_error">' . $error . '</p>';
            }

            unset($_SESSION['errors_singup']);
        }
    }

?>