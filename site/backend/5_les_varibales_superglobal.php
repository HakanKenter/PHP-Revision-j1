<?php

/**#############
 * # LES VARIABLES SUPERGLOBALES
 *##############*/

// cf: https://www.php.net/manual/fr/language.variables.superglobals.php

// Vous pouvez récuperer les informations de votre requête HTTP avec $_POST et $_GET
var_dump( $_POST );
var_dump( $_GET );

echo $_POST['email'];

/**##################
 * étape 1.
 * VÉRIFIER L'EXISTENCE
 * DES CHAMPS OBLIGATOIRES
 * ################## */

if( !isset($_POST['email']) ) {};
if( !empty($_POST['email']) ) {};

/**##################
 * étape 2.
 * VÉRIFIER LEURS CONFORMITÉ
 * ################## */

// if( strlen() > 64 ) {};
if( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {};

/**##################
 * étape 3.
 * FILTER
 * ################## */

// Échapper les caractère interprétable
htmlentities($_POST['firstname'], ENT_QUOTES);
escapeshellcmd($_POST['commande']);
// mysqli_real_escape_string : Pour faire ça a des données envoyée en bases de donnée

// Convertir les type

intval($_POST['age']);
floatval($_POST['size']);
boolval($_POST['subscriber']);

// Assurer la cohérence 
strtolower( $_POST['firstname'] );
strtoupper( $_POST['firstname'] );
trim( $_POST['firstname'] );

