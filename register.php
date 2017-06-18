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
        echo $register_name . '<br>';
        
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
        echo $register_surname . '<br>';
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
        echo $register_email . '<br>';
    }
    
    
    
    /**
    *   Verify Day
    */
    if(isset($_POST['day']) && $_POST['day'] == '0') {
        
        $_SESSION['error_select'] = "*Prosze o zaznaczenie wszystkich pól.";
        
    } else {
        
        echo $register_day = $_POST['day'] . '-';
        
    }
    
    
    /**
    *   Verify Month
    */
    if(isset($_POST['month']) && $_POST['month'] == '0') {
        
        $_SESSION['error_select'] = "*Prosze o zaznaczenie wszystkich pól.";
        
    } else {
        
        echo $register_month = $_POST['month'] . '-';
        
    }
    
    
    /**
    *   Verify Year
    */
    if(isset($_POST['year']) && $_POST['year'] == '0') {
        
        $_SESSION['error_select'] = "*Prosze o zaznaczenie wszystkich pól.";
        
    } else {
        
        echo $register_year = $_POST['year'] . '<br>';
        
    }
    
    
    
    /**
    *   Isset Select Age
    */
    if(isset($_SESSION['error_select'])){
        
        header("Location:register_form.php");
        
    }
    
    
    
    /**
    *   Verify Sex
    */
    if( isset($_POST['sex']) ) {
        
        $register_sex = $_POST['sex'];
        echo $register_sex . '<br>';
        
    } else {
        
        $_SESSION['error_register_sex'] = "*Proszę zaznaczyć jakąś opcję.";
        header("Location:register_form.php");
        
    }
    
    
    
    /**
    *   Verify Password
    */
    if ( !isset($_POST['pass'])) {
    
        $_SESSION['error_reg_pass'] = '*Proszę podać Hasło.';
        header("Location:register_form.php");  
    
    } elseif (!preg_match("/^[a-zA-Z0-9_.ąęćżóńłśĄĘĆŻÓŃŁŚ]{6,45}$/",$_POST['pass'])) {
        
        $_SESSION['error_reg_pass'] = '*Hasło może zawierać wyłącznie znaki alfabetu od a do z i składać się od 6 do 40 liter.';
        header("Location:register_form.php");  
        
    } else {
        
        $register_pass = htmlentities($_POST['pass'], ENT_QUOTES);
        echo $register_pass . '<br>';
        
    }
    
    
        
    /**
    *   Verify Password 2
    */
    if ( !isset($_POST['pass1'])) {
    
        $_SESSION['error_reg_pass1'] = '*Proszę podać Hasło.';
        header("Location:register_form.php");  
    
    } elseif (!preg_match("/^[a-zA-Z0-9_.ąęćżóńłśĄĘĆŻÓŃŁŚ]{6,45}$/",$_POST['pass1'])) {
        
        $_SESSION['error_reg_pass1'] = '*Hasło może zawierać wyłącznie znaki alfabetu od a do z i składać się od 6 do 40 liter.';
        header("Location:register_form.php");  
        
    } else {
        
        $register_pass1 = htmlentities($_POST['pass1'], ENT_QUOTES);
        echo $register_pass1 . '<br>';
        
    }
    
    
    /**
    *   Verify Passwords 
    */
    if ( $_POST['pass'] != $_POST['pass1'] ) {
        
        $_SESSION['error_reg_passwords'] = '*Hasła są różne od siebie.';
        header("Location:register_form.php");
        
    }
    
    
}

?>