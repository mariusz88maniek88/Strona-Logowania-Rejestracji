<?php 
session_start();

if(!isset($_SESSION['login'])) {
    
    header("Location:index.php");
    exit();
    
}

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
        $_SESSION['reg_nem'] = $register_name;
        
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
        $_SESSION['reg_surna'] = $register_surname;
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
        $_SESSION['reg_ema'] = $register_email;
    }
    
    
    
    /**
    *   Verify Day
    */
    if(isset($_POST['day']) && $_POST['day'] == '0') {
        
        $_SESSION['error_select'] = "*Prosze o zaznaczenie wszystkich pól.";
        
    } else {
        
        $register_day = $_POST['day'];
        
    }
    
    
    /**
    *   Verify Month
    */
    if(isset($_POST['month']) && $_POST['month'] == '0') {
        
        $_SESSION['error_select'] = "*Prosze o zaznaczenie wszystkich pól.";
        
    } else {
        
        $register_month = $_POST['month'];
        
    }
    
    
    /**
    *   Verify Year
    */
    if(isset($_POST['year']) && $_POST['year'] == '0') {
        
        $_SESSION['error_select'] = "*Prosze o zaznaczenie wszystkich pól.";
        
    } else {
        
        $register_year = $_POST['year'];
        
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
        
    }
    
    
    /**
    *   Verify Passwords 
    */
    if ( $_POST['pass'] != $_POST['pass1'] ) {
        
        $_SESSION['error_reg_passwords'] = '*Hasła są różne od siebie.';
        header("Location:register_form.php");
        
    } else {
        
        $register_pass = $_POST['pass'];
        
    }
    
    
    /**
    *   Save MySql
    */
   
        
    if(isset($register_name,$register_surname,$register_email,$register_day,$register_month, $register_year,$register_sex, $register_pass)) {
            
        if($db_connect->connect_errno) {
        
            echo "Wystapił błąd z połączeniem serwera MySql.";

        } else {
                 
            $register_name = $db_connect->real_escape_string($register_name);
            $register_surname = $db_connect->real_escape_string($register_surname);
            $register_email = $db_connect->real_escape_string($register_email);
            $register_day = $db_connect->real_escape_string($register_day);
            $register_month = $db_connect->real_escape_string($register_month);
            $register_year = $db_connect->real_escape_string($register_year);
            $register_sex = $db_connect->real_escape_string($register_sex); 
            $register_pass = $db_connect->real_escape_string($register_pass);
            $register_mail = $register_email;
            
            $salt = sha1($register_email);
            $pass_hash = $salt . sha1($salt . $register_pass);
             
            $query = "INSERT INTO users VALUES(NULL,'$register_name', '$register_surname', '$register_mail', '$register_year', '$register_month', '$register_day', '$register_sex','$pass_hash' )";
            
            if( !$result = $db_connect->query($query) ) {
                        
                echo "Wystąpił błąd: Nieprawidłowe zapytanie.";
                $db_connect->close();
                        
            } else {
                
                echo 'Dziękujemy za rejestrację.Teraz możesz sie zalogować.<br> ';
                echo '<a href="index.php">Zaloguj się.</a>';
                
            }
            
            
    }
        
    
    }
    
    
    
    
}

?>