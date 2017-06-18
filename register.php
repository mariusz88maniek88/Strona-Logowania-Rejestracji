<?php 
session_start();

require_once 'sys/main.php';
require_once 'db_connect.php';

if ( isset($_POST['register']) ) {
    
    
    /**
    *   Verify field name
    */
    if ( empty($_POST['name_register']) ) {
    
        $_SESSION['error_reg_name'] = '*Proszę podać imię.';
        header("Location:register_form.php");  
    
    } elseif (!preg_match("/^[a-zA-ZąęćżóńłśĄĘĆŻÓŃŁŚ]{2,35}$/",$_POST['name_register'])) {
        
        $_SESSION['error_reg_name'] = '*Imię może zawierać wyłącznie znaki alfabetu od a do z i składać się conajmniej z 2 liter.';
        header("Location:register_form.php");  
        
    } else {
    
    $register_name = htmlentities($_POST['name_register'], ENT_QUOTES);
        
    }
    
    
    
    /**
    *   Verify field surname
    */
    if ( empty($_POST['register_surname']) ) {
    
        $_SESSION['error_reg_surname'] = '*Proszę podać nazwisko.';
        header("Location:register_form.php");   
    
    } elseif (!preg_match("/^[a-zA-ZąęćżóńłśĄĘĆŻÓŃŁŚ]{2,35}$/",$_POST['register_surname'])) {
        
        $_SESSION['error_reg_surname'] = '*Nazwisko może zawierać wyłącznie znaki alfabetu od a do z i składać się conajmniej z 2 liter.';
        header("Location:register_form.php");  
        
    } else {
    
    $register_surname = htmlentities($_POST['register_surname'], ENT_QUOTES);
        
    }
    
    
    /**
    *   Email Verify
    */
    if ( empty($_POST['register_email']) ) {

        $_SESSION['register_email_error'] = "*Prosze podać adres email!"; 
        header("Location:register_form.php");

    } elseif (!preg_match("/^[a-zA-Z0-9_.ąęćżóńłśĄĘĆŻÓŃŁŚ]{2,35}@[a-zA-Z0-9_.ąęćżóńłśĄĘĆŻÓŃŁŚ]{2,35}$/",$_POST['register_email'])) {

        $_SESSION['register_email_error'] = "*Nie prawidłowy adres email!"; 
        header("Location:register_form.php");

    } else {
        
        $register_email = htmlentities($_POST['register_email'], ENT_QUOTES);
        
    }
    
    
    
    
}

?>