<?php

require('../functions.php');

// Vérifier que les champs obligatoire existent
if( array_contains($_POST, ['username', 'password'])) { 
    echo "Il manque des informations";
    die;
}

// Vérifier leurs conformité
if( !strlen_between($_POST['username'], 1, 16) || 
    !strlen_between($_POST['password'], 8, 32)) {
    echo "Nom d'utilisateur ou mot de passe incorrect.";
    die();
}
// Filtrer les entrées utilisateurs
$username = trim($_POST['username']);
$password = $_POST['password'];

echo '<pre>';
var_dump($username);
var_dump($password);
echo '</pre>';
?>