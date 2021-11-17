<?php
    $page_name = "Portfolio";
?>
<?php ob_start(); ?>
    <p>Portfolio</p>
<?php
$content = ob_get_clean();
include("layouts/base_layout.php"); 