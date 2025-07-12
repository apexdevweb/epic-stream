<?php
session_start();
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
        <section class="video__page">
            <?php
            if (isset($videos) && isset($_GET['id'])) {
                foreach ($videos as $video) {
                    $videoId = intval($_GET['id']);
                    if ($video->getVidId() ==  $videoId) {
            ?>
                        <article class="video__page--container">
                            <hgroup class="video__article--title-container">
                                <h2><?= $video->getVidName() ?></h2>
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
                            <small class="video__specificity"><?= $video->getVidGender() ?></small>
                            <p class="vid__article--txt"><?= $video->getVidDescript() ?></p>
                            <small class="video__specificity">Date de sortie: <?= $video->getVidDate() ?></small>
                            <br>
                            <hr class="video__separate">
                            <br>
                            <video controls poster="assets/images/<?= $video->getVidCover() ?>" class="video__item">
                                <source src="assets/videos/xxx-le-film-complet-en-francais.mp4" type="video/mp4" />
                            </video>
                        </article>
            <?php
                    }
                }
            }
            ?>
        </section>
    </main>
    <footer>
        <p class="footer__signature">© by ScriptEnjoyer</p>
    </footer>
    <script src="assets/js/mobilemenu.js"></script>
</body>

</html>