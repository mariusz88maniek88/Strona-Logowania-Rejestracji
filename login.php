<?php 

require_once 'sys\main.php';
require_once 'db_connect.php';


/**
*   Email Verify
*/
if ( empty($_POST['email']) ) {
    
    $_SESSION['email_error'] = "*Prosze podać adres email!"; 
    header("Location: index.php");
    
} elseif (!preg_match("/^[a-zA-Z0-9_.ąęćżóńłśĄĘĆŻÓŃŁŚ]{2,35}@[a-zA-Z0-9_.ąęćżóńłśĄĘĆŻÓŃŁŚ]{2,35}$/",$_POST['email'])) {
    
    $_SESSION['email_error'] = "*Nie prawidłowy adres email!"; 
    header("Location: index.php");
    
} else {
    
    $email = $_POST['email'] = true;
    
}

/**
*   Password Verify
*/
if ( empty($_POST['pass']) ) {
    
    $_SESSION['password_error'] = "*Prosze podać hasło!";
    header("Location:index.php");
    
} elseif ( !preg_match("/^[a-zA-Z0-9_.ąęćżóńłśĄĘĆŻÓŃŁŚ]{6,35}$/",$_POST['pass']) ) {
    
    $_SESSION['password_error'] = "Hasło musi zawierać od 6 do 35 znaków.";
    header("Location:index.php");
    
} else {
    
    $pass = $_POST['pass'] = true;
    
}

/**
*   Login
*/
if ( $email == true && $pass == true ) {
    
    echo "Zalogowałeś się!";
    
}   


?>