<?php
require_once "backend/connection/Db_connection.php";
require_once "backend/class/Video.php";

if (isset($_POST['valid_search'])) {
    if (!empty($_POST['movie_search'])) {
        $search_movie = htmlspecialchars(strip_tags($_POST['movie_search']));

        try {
            $search_all_vid = $bdd->prepare("SELECT * FROM film WHERE vid_name LIKE ?");
            $search_all_vid->execute(["%$search_movie%"]);
        } catch (PDOException $e) {
            echo "Erreur de chargement des films" . $e->getMessage();
        }

        $founded_movie = [];

        if ($search_all_vid->rowCount() > 0) {

            foreach ($search_all_vid->fetchAll(PDO::FETCH_ASSOC) as $movie_infos) {
                $founded_movie = new Video(
                    (int) $movie_infos['vid_id'],
                    $movie_infos['vid_name'],
                    $movie_infos['vid_description'],
                    $movie_infos['vid_gender'],
                    $movie_infos['vid_release_date'],
                    (int) $movie_infos['vid_cover']
                );
                $founded_movies[] = $founded_movie;
            }
        }
    }
}
