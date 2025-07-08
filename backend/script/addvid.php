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

            $size_movie_cover = 2097152;
            $ext_movie_cover_valide = ['jpg', 'jpeg', 'png', 'webp'];

            if ($_FILES['movie_cover']['size'] <= $size_movie_cover) {
                $movie_cover_upload_ext = strtolower(substr(strrchr($_FILES['movie_cover']['name'], '.'), 1));

                if (in_array($movie_cover_upload_ext, $ext_movie_cover_valide)) {
                    $upload_route_cover = "assets/images" . $_GET['vid_id'] . "." . $movie_cover_upload_ext;
                    $movie_cover_transfert = move_uploaded_file($_FILES['movie_cover']['tmp_name'],  $upload_route_cover);
                    if ($movie_cover_transfert) {
                        try {
                            $insert_movie_cover = $bdd->prepare("INSERT INTO `film`(`vid_name`, `vid_description`, `vid_gender`, `vid_release_date`, `vid_cover`, `video`) VALUES (?,?,?,?,?,?)");
                            $insert_movie_cover->execute([$title_of_vid, $descript_of_vid, $gender_of_vid, $date_of_vid, $movie_cover_upload_ext]);
                        } catch (PDOException $e) {
                            echo "Erreur d'insertion de la vidéo'" . $e->getMessage();
                        }
                    } else {
                        echo "Erreur de transfert";
                    }
                } else {
                    echo "Votre image dois être au format : jpg, jpeg, png";
                }
            } else {
                echo "Votre image ne dois pas dépassé 2MO";
            }
        } else {
            echo "Cette vidéo existe déjà";
        }
    } else {
        echo "Veuillez remplir tout les champs";
    }
}
