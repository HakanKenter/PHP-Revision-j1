<?php
session_start();

require('../functions.php');

define("ERR_BADID", "Nom d'utilisateur ou mot de passe incorrect.");

// Vérifier que les champs obligatoire existent
if( array_contains($_POST, ['username', 'password'])) { 
    error(ERR_BADID);
}

// Vérifier leurs conformité
if( !strlen_between($_POST['username'], 1, 16) || 
    !strlen_between($_POST['password'], 8, 32)) {
    error(ERR_BADID);
}
// Filtrer les entrées utilisateurs
$username = trim($_POST['username']);
$password = $_POST['password'];

// Traitement
$user = [
    'username' => 'julien',
    'password' => 'password'
];

// Vérififier l'identifiant & le mdp
if( $username !== $user['username'] ) {
    error(ERR_BADID);
}

// Se connecter
$_SESSION['is_logged'] = true;
$_SESSION['username'] = $user['username'];

?>