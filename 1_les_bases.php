<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
// On démarre par l'ouverture des balises PHP

// 1. Structure de données
// -----------------------

/* #############
 * Les variables
 * ############# */

$mon_entier = 1;
$ma_chaine = "la valeur";
$mon_reel = 2.3;

echo $ma_chaine . "<br />";

// Concatener un chaine en utilisant 
// le point '.'
$spacer = " ";
echo "un première chaine" . $spacer . "une seconde chaîne<br />";

// en placant directement le nom d'une variable dans 
// la chaine
$nombre = 2;
echo "le nombre vaut $nombre";

/* #############
 * Les collections
 * ############# */

// déclaration d'un tableau
$mon_tableau = [1, 2, 3];
// indices :    0  1  2

// accès à un tableau
$mon_tableau[0] = 5;

// déclarer un tableau associatif
$mon_tableau_associatif = [ 
    "ma_cle_1" => 1,
    "ma_cle_2" => 2,
    "ma_cle_3" => 3
];

echo $mon_tableau_associatif["ma_cle_1"];
echo '<pre>'; var_dump( $mon_tableau ); echo '</pre>';

?>
</body>
</html>