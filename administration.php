<?php
require "backend/security/adminSecure.php";
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
            <h2 class="secondary__title"><?= $titles[3] ?></h2>
        </div>
        <section class="admin__page">
            <div class="admin__title--wrapper">
                <h3 class="admin__title"><?= "Bienvenue" . " " . $_SESSION["admin_data"]["adm_name"] ?></h3>
            </div>
            <fieldset class="admin__vid--modif">
                <legend>Ajouter un film</legend>
                <form method="post" enctype="multipart/form-data">
                    <input type="text" placeholder="Titre" name="movie_title">
                    <input type="text" placeholder="Date de sortie">
                    <label for="movie_gender">Genre</label>
                    <select name="movie_gender">
                        <option value="Action">Action</option>
                        <option value="Aventure">Aventure</option>
                        <option value="Animation">Animation</option>
                        <option value="Arts Martiaux">Arts Martiaux</option>
                        <option value="Biopic">Biopic</option>
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
                <legend>Supprimer un film</legend>
            </fieldset>
            <fieldset class="admin__vid--modif">
                <legend>Modifier un film</legend>
            </fieldset>
            <br>
            <hr class="main__separate">
            <div class="admin_sub--container">
                <button class="admin__menu--btn"><i class="fa-solid fa-plus"></i></button>
                <button class="admin__menu--btn"><i class="fa-solid fa-minus"></i></button>
                <button class="admin__menu--btn"><i class="fa-solid fa-gear"></i></button>
            </div>
        </section>
    </main>
    <footer>
        <p class="footer__signature">© by ScriptEnjoyer</p>
    </footer>
    <script src="assets/js/paramsVid.js"></script>
    <script src="assets/js/mobilemenu.js"></script>
</body>

</html>