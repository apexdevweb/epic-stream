<?php
require "backend/connection/Db_connection.php";


if (isset($_POST['movie_add'])) {

    if (
        !empty($_POST['movie_title']) && !empty($_POST['release_date']) && !empty($_POST['movie_gender'])
        && !empty($_POST['movie_description']) && !empty($_FILES['movie_cover']) && !empty($_FILES['movie_cover']['name']) && !empty($_FILES['movie_vid'])
    ) {

        $title_of_vid = htmlspecialchars(strip_tags($_POST['movie_title']));
        $date_of_vid = htmlspecialchars(strip_tags($_POST['release_date']));
        $gender_of_vid = htmlspecialchars(strip_tags($_POST['movie_gender']));
        $descript_of_vid = htmlspecialchars(strip_tags($_POST['movie_description']));

        try {
            $movie_verif = $bdd->prepare("SELECT * FROM film WHERE vid_name = ?");
            $movie_verif->execute([$title_of_vid]);
        } catch (PDOException $e) {
            echo "Erreur de vérification" . $e->getMessage();
        }

        if ($movie_verif->rowCount() === 0) {
            require "src/coverScript.php";
        } else {
            echo "Cette vidéo existe déjà";
        }
    } else {
        echo "Veuillez remplir tout les champs";
    }
}
