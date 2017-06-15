<?php 

require_once 'sys\main.php';
require_once 'db_connect.php';




/**
*   Login
*/
$db_connect = new mysqli($db_host, $db_user, $db_pass, $db_name);
    
if ( $db_connect->connect_errno ) {
        
    echo "Wystapił błąd podczas połączenia z serwerem MySql.!";
        
} else {
        
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
            
            if(!isset($email_verify)) {
            
            $email_verify = htmlentities($_POST['email'],ENT_QUOTES);      
                
            $db_connect = new mysqli($db_host, $db_user, $db_pass, $db_name);
                
                if( !$db_connect->connect_errno ) {
                    
                    $email = $db_connect->real_escape_string($email_verify);
                    
                    $query = "SELECT * From users WHERE Email='$email'";
                    
                    if( !$result = $db_connect->query($query) ) {
                        
                        echo "Wystąpił błąd: Nieprawidłowe zapytanie.";
                        $db_connect->close();
                        
                    }
                    
                    if( $result->num_rows == 1) {
                        
                        $row = $result->fetch_row();
                        $user = $row[3];
                        echo $user . '<br>';
                        
                    } else {
                        
                        $_SESSION['email_error'] = "*Nie prawidłowy adres email!"; 
                        header("Location: index.php");
                        
                    }
                    
                    
                }   else {
                    
                    echo "Wystapił błąd z połączeniem serwera MySql.";
                    
                }
                
                
            } else {
                
                $_SESSION['email_error'] = "*Prosze podać adres email!"; 
                header("Location: index.php");
                
            }

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

        }  else {
            
            
            if(!isset($pass_verify)) {
            
            $pass_verify = htmlentities($_POST['pass'],ENT_QUOTES);      
                
            $db_connect = new mysqli($db_host, $db_user, $db_pass, $db_name);
                
                if( !$db_connect->connect_errno ) {
                    
                    $pass = $db_connect->real_escape_string($pass_verify);
                    
                    $query = "SELECT * From users WHERE haslo='$pass'";
                    
                    if( !$result = $db_connect->query($query) ) {
                        
                        echo "Wystąpił błąd: Nieprawidłowe zapytanie.";
                        $db_connect->close();
                        
                    }
                    
                    if( $result->num_rows == 1) {
                        
                        $row = $result->fetch_row();
                        $user_pass = $row[6];
                        echo $user_pass . '<br>';
                        
                    } else {
                        
                        $_SESSION['password_error'] = "*Nie prawidłowy adres email!"; 
                        header("Location: index.php");
                        
                    }
                    
                    
                }   else {
                    
                    echo "Wystapił błąd z połączeniem serwera MySql.";
                    
                }
                
                
            } else {
                
                $_SESSION['password_error'] = "*Prosze podać adres email!"; 
                header("Location: index.php");
                
            }
    
    
    }
    
  
}

?>