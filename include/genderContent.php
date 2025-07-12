<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

switch ($page) {
    case 'action':
        foreach ($videos as $video) {
            if ($video->getVidGender() === "Action") {
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
        <?php
        break;
    case 'aventure':
        foreach ($videos as $video) {
            if ($video->getVidGender() === "Aventure") {
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
        <?php
        break;
    case 'animation':
        foreach ($videos as $video) {
            if ($video->getVidGender() === "Animation") {
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
        <?php
        break;
    case 'arts-martiaux':
        foreach ($videos as $video) {
            if ($video->getVidGender() === "Arts Martiaux") {
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
        <?php
        break;
    case 'biopic':
        foreach ($videos as $video) {
            if ($video->getVidGender() === "Biopic") {
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
        <?php
        break;
    case 'comedie':
        foreach ($videos as $video) {
            if ($video->getVidGender() === "Comedie") {
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
        <?php
        break;
    case 'drame':
        foreach ($videos as $video) {
            if ($video->getVidGender() === "Drame") {
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
        <?php
        break;
    case 'documentaire':
        foreach ($videos as $video) {
            if ($video->getVidGender() === "Documentaire") {
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
        <?php
        break;
    case 'historique':
        foreach ($videos as $video) {
            if ($video->getVidGender() === "Historique") {
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
        <?php
        break;
    case 'horreur':
        foreach ($videos as $video) {
            if ($video->getVidGender() === "Horreur") {
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
        <?php
        break;
    case 'espionnage':
        foreach ($videos as $video) {
            if ($video->getVidGender() === "Espionnage") {
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
        <?php
        break;
    case 'famille':
        foreach ($videos as $video) {
            if ($video->getVidGender() === "Famille") {
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
        <?php
        break;
    case 'fantastique':
        foreach ($videos as $video) {
            if ($video->getVidGender() === "Fantastique") {
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
        <?php
        break;
    case 'guerre':
        foreach ($videos as $video) {
            if ($video->getVidGender() === "Guerre") {
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
        <?php
        break;
    case 'science-fiction':
        foreach ($videos as $video) {
            if ($video->getVidGender() === "Science fiction") {
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
<?php
        break;
    default:
        echo "<h5 class='default__h5'>Bienvenue !</h5>";
        echo "<p class='default__p'>Veuillez sélectionner une catégorie de film.</p>";
        break;
}
?>