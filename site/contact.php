<?php
    $page_name = "Contact";
?>
<?php ob_start(); ?>
    <p>Contact</p>
<?php
$content = ob_get_clean();
include("layouts/base_layout.php"); 