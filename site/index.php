<?php
$page_name = "Accueil";
?>
<?php ob_start(); ?>
    <p>Accueil</p>
<?php
$content = ob_get_clean();
include("layouts/home_layout.php"); 