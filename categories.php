<?php
session_start();
require "include/title.php";
require "backend/script/viewAllVid.php";
?>
<!DOCTYPE html>
<html lang="fr">
<?php
require "include/head.php";
?>

<body>
    <?php
    require "include/header.php";
    ?>
    <main>
        <hr class="main__separate">
        <div class="main__wrapper">
            <h2 class="secondary__title"><?= $titles[1] ?></h2>
        </div>
        <section class="home__page">
            <div class="container">
                <div class="A"><a href="categories.php?page=action" class="grid__categ--item">Action</a></div>
                <div class="B"><a href="categories.php?page=aventure" class="grid__categ--item">Aventure</a></div>
                <div class="C"><a href="categories.php?page=animation" class="grid__categ--item">Animation</a></div>
                <div class="D"><a href="categories.php?page=arts-martiaux" class="grid__categ--item">Arts Martiaux</a></div>
                <div class="E"><a href="categories.php?page=biopic" class="grid__categ--item">Biopic</a></div>
                <div class="F"><a href="categories.php?page=comedie" class="grid__categ--item">Comédie</a></div>
                <div class="G"><a href="categories.php?page=drame" class="grid__categ--item">Drame</a></div>
                <div class="H"><a href="categories.php?page=documentaire" class="grid__categ--item">Documentaire</a></div>
                <div class="I"><a href="categories.php?page=historique" class="grid__categ--item">Historique</a></div>
                <div class="J"><a href="categories.php?page=horreur" class="grid__categ--item">Horreur</a></div>
                <div class="K"><a href="categories.php?page=espionnage" class="grid__categ--item">Espionnage</a></div>
                <div class="L"><a href="categories.php?page=famille" class="grid__categ--item">Famille</a></div>
                <div class="M"><a href="categories.php?page=fantastique" class="grid__categ--item">Fantastique</a></div>
                <div class="N"><a href="categories.php?page=guerre" class="grid__categ--item">Guerre</a></div>
                <div class="O"><a href="categories.php?page=science-fiction" class="grid__categ--item">Science fiction</a></div>
            </div>
        </section>
        <br>
        <hr class="main__separate">
        <section class="categ__container">
            <?php
            include "include/genderContent.php";
            ?>
        </section>
    </main>
    <footer>
        <p class="footer__signature">© by ScriptEnjoyer</p>
    </footer>
    <script src="assets/js/wallpapper.js"></script>
    <script src="assets/js/mobilemenu.js"></script>
</body>

</html>