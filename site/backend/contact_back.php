<?php

// Vérifier que les champs obligatoire existent
if( empty($_POST['firstname']) || 
    empty($_POST['lastname']) || 
    empty($_POST['email']) || 
    empty($_POST['message'])) {
    echo "Il manque le prénom";
}

// Vérifier leurs conformité
if(strlen( $_POST['firstname']) > 64) {
    echo "Prénom trop long";
    die();
}
if(strlen( $_POST['lastname']) > 64) {
    echo "Nom de famile trop long";
    die();
}
if(!filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL )) {
    echo "Format d'email invalide";
    die();
}
if (strlen( $_POST['message'] ) > 65535) {
    echo "Message trop long";
    die;
}

// Filtrer les entrées utilisateurs
$firstname = htmlentities($_POST['firstname'], ENT_QUOTES);


echo $firstname;
echo "<br />";
?>