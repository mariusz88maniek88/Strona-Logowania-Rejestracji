<?php 

require_once 'sys\main.php';
require_once 'db_connect.php';



function loginPass($email,$pass) {
    
    global $db_host, $db_user, $db_pass, $db_name;
    
    if($_POST['action'] != 'login_user') {
    
    return "Nie prawidłowa wartość funkcji loginPass.";
    
    }  
    
    $emailUser = mb_strlen($email, 'UTF-8');
    $emailPass = mb_strlen($pass, 'UTF-8');
    
    if ( $emailUser < 3 || $emailUser > 20 || 
       $emailPass < 6 || $emailPass > 40 ) {
        
        return true;
        
    }
    
}



?>