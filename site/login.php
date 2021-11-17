<?php
    $page_name = "Se Connecter";
?>
<?php ob_start(); ?>
    <h2>Contactez-nous</h2>

    <form class="ContactForm" action="backend/login_back.php" method="POST">
        <input class="text" type="username" name="username" placeholder="Nom d'utilisateur" required>
        <input class="password" type="password" name="password" placeholder="Mot de passe" required>
        <button type="submit">Envoyer</button>
    </form>
<?php
$content = ob_get_clean();
include("layouts/base_layout.php"); 