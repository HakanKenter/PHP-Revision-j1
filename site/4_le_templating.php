<?php

/**###############
 * # L'AFFICHAGE
 * ##############*/

echo 'une chaine';

$variable = "une variable";
echo $variable;

/**################
 * # LES INCLUSIONS 
 * ################*/

// Inclusion non-bloquante (des erreurs)
include('chemin/vers/fichier.php');

// Inclusion bloquante 
require('chemin/vers/fichier.php');

/**################
 * # LA BUFFERISATION
 * ################*/

?>
<?php
// Démarre la temporisation
ob_start();
?>
<p>Ce contenu est enregistré dans le buffer</p>
<?php 
$content = ob_get_clean(); // Stock le contenu du buffer dans $content;

