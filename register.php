<?php 
session_start();

require_once 'sys/main.php';
require_once 'db_connect.php';

if ( isset($_POST['register']) ) {
    
    if ( !empty($_POST['name_register']) ) {
    
        $register_name = htmlentities($_POST['name_register'], ENT_QUOTES);
    
    } else {
    
    $_SESSION['error_reg_name'] = '*Proszę podać imię.';
    header("Location:register_form.php");  
    exit();
    
    }
}

?>