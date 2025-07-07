<header class="header__primary">
    <h1 class="header__primary--title"><span>E</span>pic-Stream</h1>
    <nav class="nav__primary">
        <ul class="item__list--primary">
            <li class="nav__item"><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
            <li class="nav__item"><a href="categories.php"><i class="fa-solid fa-list"></i> Categories</a></li>
            <li class="nav__item"><a href="info.php"><i class="fa-solid fa-circle-info"></i> Info</a></li>
            <?php
            if (isset($_SESSION["adm_Auth"])) {
            ?>
                <li class="nav__item"><a href="administration.php"><i class="fa-solid fa-user-secret"></i> Administration</a></li>
                <li class="nav__item"><a href="../backend/security/logout.php"><i class="fa-solid fa-power-off"></i> Logout</a></li>
            <?php
            }
            ?>
        </ul>
    </nav>
</header>