<?php 
session_start();
session_destroy();

// Redirection
header('Location: /php/site/login.php');
?>