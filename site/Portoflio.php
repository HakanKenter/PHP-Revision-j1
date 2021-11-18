<?php
    session_start();

    $page_name = "Portfolio";
    $jsonImg = file_get_contents('./data/image.json');
    $Img = json_decode($jsonImg);
?>
<?php ob_start(); ?>
    <p>Portfolio</p>
    <div id="carouselExampleControls" class="carousel slide col-lg-6 mx-auto m-5" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="<?= $Img[0]->img; ?>" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="<?= $Img[1]->img; ?>" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="<?= $Img[2]->img; ?>" alt="Third slide">
        </div>
    </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <?php if( isset($_SESSION['is_logged']) && $_SESSION['is_logged']): ?>
        <form class="AddImgForm mx-auto" action="backend/portfolio_back.php" method="POST">
            <input class="text mb-3" type="text" name="nom" placeholder="nom" required>
            <input type="text" id="monImage" name="monImage" placeholder="Lien de votre image"><br><br>
            <button type="submit">Ajouter</button>
        </form>
    <?php endif; ?>
    

<?php
$content = ob_get_clean();
include("layouts/base_layout.php"); 