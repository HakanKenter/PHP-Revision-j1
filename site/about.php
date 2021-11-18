<?php
    session_start();
    $page_name = "About";
?>
<?php ob_start(); ?>
    <p>À Propos</p>
<?php
$content = ob_get_clean();
include("layouts/base_layout.php"); 