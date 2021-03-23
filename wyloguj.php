<?php 
session_start();

if(isset($_SESSION['id']))
{
    unset($_SESSION['id']);
    header('Location: zaloguj.php');
}
else
{
header('Location: zaloguj.php');
exit(); 
}

session_destroy();
?>