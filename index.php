<?php
session_start();
require "include/title.php";
require "backend/script/viewAllVid.php";
require "backend/script/visites.php";
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
            <h2 class="secondary__title"><?= $titles[0] ?></h2>
        </div>
        <section class="home__page">
            <?php
            if (isset($videos)) {
                foreach ($videos as $video) {
            ?>
                    <article class="vid__article--primary-container">
                        <picture class="vid__article--pict">
                            <img src="assets/images/<?= $video->getVidCover() ?>" alt="<?= $video->getVidName() ?>" class="vid__article--img">
                        </picture>
                        <button class="vid__article--btn-view"><a href="video.php?id=<?= $video->getVidId() ?>">View</a></button>
                    </article>
            <?php
                }
            }
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