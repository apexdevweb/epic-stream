<?php
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
