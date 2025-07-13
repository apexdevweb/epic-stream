<?php
require "backend/security/adminSecure.php";
require "include/title.php";
require_once "backend/script/addvid.php";
require_once "backend/script/viewAllVid.php";
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
            <h2 class="secondary__title"><?= $titles[3] ?></h2>
        </div>
        <section class="admin__page">
            <div class="admin__title--wrapper">
                <h3 class="admin__title"><?= "Bienvenue" . " " . $_SESSION["admin_data"]["adm_name"] ?></h3>
            </div>
            <fieldset class="admin__vid--modif">
                <legend><?= $legend[0] ?></legend>
                <form method="post" enctype="multipart/form-data">
                    <input type="text" placeholder="Titre" name="movie_title">
                    <input type="text" placeholder="Date de sortie" name="release_date">
                    <label for="movie_gender">Genre</label>
                    <select name="movie_gender">
                        <option value="Action">Action</option>
                        <option value="Aventure">Aventure</option>
                        <option value="Animation">Animation</option>
                        <option value="Arts Martiaux">Arts Martiaux</option>
                        <option value="Biopic">Biopic</option>
                        <option value="Science-fiction">Science fiction</option>
                        <option value="Fantastique">Fantastique</option>
                        <option value="Comedie">Comedie</option>
                        <option value="Drame">Drame</option>
                        <option value="Historique">Historique</option>
                        <option value="Espionnage">Espionnage</option>
                        <option value="Guerre">Guerre</option>
                        <option value="Famille">Famille</option>
                        <option value="Documentaire">Documentaire</option>
                        <option value="Horreur">Horreur</option>
                    </select>
                    <textarea name="movie_description" cols="30" rows="10" placeholder="description"></textarea>
                    <label for="movie_cover">Image de la video</label>
                    <input type="file" name="movie_cover">
                    <label for="movie_cover">Video</label>
                    <input type="file" name="movie_vid" accept="video/*">
                    <input type="submit" value="ajouter" name="movie_add">
                </form>
            </fieldset>
            <fieldset class="admin__vid--modif">
                <legend><?= $legend[1] ?></legend>
                <form method="post">
                    <span class="search__item"><input type="search" placeholder="Titre" name="movie_del_search"><button name="search_movie"><i class=' fa-brands fa-searchengin'></i></button></span>
                    <div class="search__item--result">
                        <?php
                        if (isset($videos)) {
                            foreach ($videos as $video) {
                        ?>
                                <p class="search__item--list"><?= $video->getVidName() ?><a href="backend/script/removvid.php?id=<?= $video->getVidId() ?>"> <i class="fa-solid fa-delete-left"></i></a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </form>
            </fieldset>
            <fieldset class="admin__vid--modif">
                <legend><?= $legend[2] ?></legend>
                <form method="post">
                    <span class="search__item"><input type="search" placeholder="Titre" name="movie_del_search"><button name="search_movie"><i class="fa-solid fa-magnifying-glass"></i></button></span>
                    <input type="text" name="movie_modif_titre" placeholder="Titre">
                    <textarea name="movie_modif_description" cols="30" rows="10" placeholder="description"></textarea>
                    <input type="submit" value="Modifier" name="modif_movie">
                </form>
            </fieldset>
            <br>
            <hr class="main__separate">
            <div class="admin_sub--container">
                <button class="admin__menu--btn"><i class="fa-solid fa-plus"></i></button>
                <button class="admin__menu--btn"><i class="fa-solid fa-minus"></i></button>
                <button class="admin__menu--btn"><i class="fa-solid fa-gear"></i></button>
            </div>
            <br>
            <hr class="main__separate">
            <div class="chart__container">
                <canvas id="myChart"></canvas>
            </div>
        </section>
    </main>
    <footer>
        <p class="footer__signature"><?= $footer_signature ?></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/paramsVid.js"></script>
    <script src="assets/js/mobilemenu.js"></script>
</body>

</html>