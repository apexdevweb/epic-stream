<?php
require "include/title.php";
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
                <div class="A"><a href="#" class="grid__categ--item">Action</a></div>
                <div class="B"><a href="#" class="grid__categ--item">Aventure</a></div>
                <div class="C"><a href="#" class="grid__categ--item">Animation</a></div>
                <div class="D"><a href="#" class="grid__categ--item">Arts Martiaux</a></div>
                <div class="E"><a href="#" class="grid__categ--item">Biopic</a></div>
                <div class="F"><a href="#" class="grid__categ--item">Comédie</a></div>
                <div class="G"><a href="#" class="grid__categ--item">Drame</a></div>
                <div class="H"><a href="#" class="grid__categ--item">Documentaire</a></div>
                <div class="I"><a href="#" class="grid__categ--item">Historique</a></div>
                <div class="J"><a href="#" class="grid__categ--item">Horreur</a></div>
                <div class="K"><a href="#" class="grid__categ--item">Espionnage</a></div>
                <div class="L"><a href="#" class="grid__categ--item">Famille</a></div>
                <div class="M"><a href="#" class="grid__categ--item">Fantastique</a></div>
                <div class="N"><a href="#" class="grid__categ--item">Guerre</a></div>
                <div class="O"><a href="#" class="grid__categ--item">Science fiction</a></div>
            </div>
        </section>
    </main>
    <footer>
        <p class="footer__signature">© by ScriptEnjoyer</p>
    </footer>
    <script src="assets/js/wallpapper.js"></script>
    <script src="assets/js/mobilemenu.js"></script>
</body>

</html>