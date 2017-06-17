<?php 
session_start();
    

require_once 'sys\main.php';

echo 'Witaj na portalu ' .$_SESSION['name'] . ' ' . $_SESSION['surname'] . '!';

?>