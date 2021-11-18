<?php 

session_start();

require('../errors.php');
require('../functions.php');

// Verifier la présence des infos obligatoires
if( array_contains($_POST, ['username', 'password', 'confirm' ])) { 
    error(ERR_MISSING, '/php/site/register.php');
}

// Les filtrer
$username = trim(strtolower($_POST['username']));
$password = $_POST['password'];
$confirm = $_POST['confirm'];

// Vérifier leurs cohérence
if( !strlen_between($username, 1, 16)) {
    error(ERR_USERNAME, '/php/site/register.php');
}
if( !strlen_between($password, 6, 32)) {
    error(ERR_PASSWORD, '/php/site/register.php');
}
if( !strlen_between($confirm, 6, 32)) {
    error(ERR_CONFIRM, '/php/site/register.php');
}

// Lire le fichier
// On récupère les infos du fichier en json
$json = file_get_contents('../data/users.json', true);
// On vérifie qu'il s'est bien ouvert
if( $json === false ) {
    error(ERR_INTERNAL, '/php/site/register.php');
}

// On décode le JSON récuperé
$users = json_decode($json, true);
if( $users === null ) {
    error(ERR_INTERNAL, '/php/site/register.php');
}

// Traitement
// Vérifier que login n'existe pas déjà 
$already_exist = false;
foreach($users as $user) {
    // Vérififier l'identifiant & le mdp
    if( $username === $user['username'] ) {
        $already_exist = true;
        error(ERR_AEXIST, '/php/site/register.php');
    } 
}

// On l'ajout à notre tableau d'utilisateur (array_push)
array_push($users, [
    "username" => $username,
    "password" => $password
]);

// Encoder le tableau
$json = json_encode($users);
if( $json === false ){
    error(ERR_INTERNAL, '/php/site/register.php');
}

// Écrire le fichier
if( file_put_contents('../data/users.json', $json) === false) {
    error(ERR_INTERNAL, '/php/site/register.php');
}

// REDIRECTION
header('Location: /php/site/login.php');
?>