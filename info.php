<?php
require_once "backend/script/adm_login.php";
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
            <h2 class="secondary__title"><?= $titles[2] ?></h2>
        </div>
        <section class="home__page">
            <article>
                <hgroup>
                    <h3>Lorem.</h3>
                    <h4>Lorem, ipsum.</h4>
                </hgroup>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore itaque maxime
                    accusantium sapiente labore rem id, pariatur neque quis ex quos doloremque aperiam officiis
                    earum assumenda et consequuntur nihil blanditiis ab error odit! Aliquam quod harum mollitia
                    incidunt a optio tempore ipsum explicabo? Laboriosam atque ipsum esse! Sit, aliquid provident!
                </p>
            </article>
            <div class="form__wrapper">
                <form method="POST">
                    <input type="text" name="adm_name" placeholder="Name" required>
                    <input type="password" name="adm_pass" placeholder="Password" required>
                    <input type="submit" value="Login" name="log_admin">
                </form>
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