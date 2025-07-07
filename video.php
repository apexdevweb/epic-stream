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
        <section class="video__page">
            <article class="video__page--container">
                <hgroup class="video__article--title-container">
                    <h2>XXX</h2>
                    <h3>Vin Diesel, Asia Argento,Marton Csokas,Samuel L. Jackson</h3>
                </hgroup>
                <br>
                <div class="video__langage--container">
                    <div class="video__langage--sub-container">
                        <label for="version_select">VF</label>
                        <input type="radio" name="version_select" id="">
                    </div>
                    <div class="video__langage--sub-container">
                        <label for="version_select">VO</label>
                        <input type="radio" name="version_select" id="">
                    </div>
                    <div class="video__langage--sub-container">
                        <label for="version_select">VOSTVF</label>
                        <input type="radio" name="version_select" id="">
                    </div>
                </div>
                <br>
                <small class="video__specificity">Action</small>
                <p class="vid__article--txt">Anarchy 99, un groupe terroriste d'origine russe installé à Prague
                    (Tchécoslovaquie) a des intentions belliqueuses depuis quelque temps. Ce groupe démasque et tue
                    facilement un agent infiltré envoyé par la National Security Agency pour découvrir leur projet...
                </p>
                <small class="video__specificity">Date de sortie: 2002</small>
                <br>
                <hr class="video__separate">
                <br>
                <video controls poster="assets/images/xeEw3eLeSFmJgXZzmF2Efww0q3s.webp" class="video__item">
                    <source src="assets/videos/xxx-le-film-complet-en-francais.mp4" type="video/mp4" />
                </video>
            </article>
        </section>
    </main>
    <footer>
        <p class="footer__signature">© by ScriptEnjoyer</p>
    </footer>
    <script src="assets/js/wallpapper.js"></script>
    <script src="assets/js/mobilemenu.js"></script>
</body>

</html>