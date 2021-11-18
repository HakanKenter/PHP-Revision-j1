<?php
session_start();

require('../functions.php');

define("ERR_BADID", "Nom d'utilisateur ou mot de passe incorrect.");

// Vérifier que les champs obligatoire existent
if( array_contains($_POST, ['username', 'password'])) { 
    error(ERR_BADID, '/php/site/login.php');
}

// Vérifier leurs conformité
if( !strlen_between($_POST['username'], 1, 16) || 
    !strlen_between($_POST['password'], 1, 32)) {
    error(ERR_BADID, '/php/site/login.php');
}
// Filtrer les entrées utilisateurs
$username = trim($_POST['username']);
$password = $_POST['password'];

// Traitement
// On récupère les infos du fichier en json
$users = file_get_contents('../data/user.json', true);

// On décode le JSON récuperé
$users_decode = json_decode($users, true);
// var_dump(json_decode($user, true));die();

$is_logged = false;
foreach($users_decode as $user) {
    // Vérififier l'identifiant & le mdp
    if( $username === $user['username'] && $password === $user['password']) {
        $is_logged = true;
        break;
    }
}

if(!$is_logged){
    error(ERR_BADID, '/php/site/login.php');
}

// Se connecter
$_SESSION['is_logged'] = true;
$_SESSION['username'] = $user['username'];

// Redirection
header('Location: /php/site');

?>