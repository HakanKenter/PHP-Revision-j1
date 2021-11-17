<?php

require('../functions.php');

// Vérifier que les champs obligatoire existent
if( array_contains($_POST, ['firstname', 'lastname', 'email', 'message'])) { 
    echo "Il manque des informations";
    die;
}

// Vérifier leurs conformité
if(!strlen_between($_POST['firstname'], 1, 64)) {
    echo "Prénom trop long";
    die();
}
if(!strlen_between($_POST['lastname'], 1, 64)) {
    echo "Nom de famile trop long";
    die();
}
if(!filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL )) {
    echo "Format d'email invalide";
    die();
}
if (!strlen_between($_POST['message'], 1, 65535)) {
    echo "Message trop long";
    die;
}

// Filtrer les entrées utilisateurs
$firstname = trim(strtolower(htmlentities($_POST['firstname'], ENT_QUOTES)));
$lastname = trim(strtolower(htmlentities($_POST['lastname'], ENT_QUOTES)));
$email = trim(strtolower(htmlentities($_POST['email'], ENT_QUOTES)));
$message = trim(strtolower(htmlentities($_POST['message'], ENT_QUOTES)));


echo $firstname;
echo "<br />";
echo $lastname;
echo "<br />";
echo $email;
echo "<br />";
echo $message;
?>