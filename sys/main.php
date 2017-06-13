<?php
session_start();

if(!isset($_SESSION['token'])) {
    
    $_SESSION['token'] = sha1(uniqid((string)mt_rand(), TRUE));
    
}   else    {
    
    echo "działa";
    
}

?>