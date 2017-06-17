<?php 
session_start();
    
if(!isset($_SESSION['login'])) {
    
    header("Location:index.php");
    exit();
    
}

require_once 'sys\main.php';

echo 'Witaj na portalu ' .$_SESSION['name'] . ' ' . $_SESSION['surname'] . '!<br>';
echo '<a href="logout.php">Wyloguj się</a>';

?>