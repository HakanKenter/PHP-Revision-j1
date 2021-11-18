<header class="MainHeader">
        <h1 class="MainHeader__Title">DEMO</h1>

        <nav class="MainNav">
            <ul>
                <li class="MainNav__Item"><a href="/php/site">Accueil</a></li>
                <li class="MainNav__Item"><a href="/php/site/about.php">À propos</a></li>
                <li class="MainNav__Item"><a href="/php/site/contact.php">Contact</a></li>
                <li class="MainNav__Item"><a href="/php/site/portoflio.php">Portoflio</a></li>
                <?php if( isset($_SESSION['is_logged']) && $_SESSION['is_logged']): ?>
                <li class="MainNav__Item"><a href="/php/site/backend/disconnect_back.php">Se déconnecter</a></li>
                <?php else: ?>
                <li class="MainNav__Item"><a href="/php/site/login.php">Se connecter</a></li>
                <li class="MainNav__Item"><a href="/php/site/register.php">S'inscrire</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>