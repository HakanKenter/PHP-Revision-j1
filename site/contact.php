<?php
    $page_name = "Contact";
?>
<?php ob_start(); ?>
    <h2>Contactez-nous</h2>

    <form class="ContactForm" action="backend/contact_back.php" method="POST">
        <div class="ContactForm__Line">
            <input type="text" name="firstname" placeholder="Prénom" required />
            <input type="text" name="lastname" placeholder="Nom" required />
        </div>
        <input class="email" type="email" name="email" placeholder="email" required>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Que puis-je faire pour vous ?" required ></textarea>
        <button type="submit">Envoyer</button>
    </form>
<?php
$content = ob_get_clean();
include("layouts/base_layout.php"); 