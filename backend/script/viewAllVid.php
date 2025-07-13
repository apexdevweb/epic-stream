<?php
require_once "backend/connection/Db_connection.php";
require "backend/class/Video.php";

try {
    $view_all_vid = $bdd->prepare("SELECT * FROM film");
    $view_all_vid->execute();
} catch (PDOException $e) {
    echo "Erreur de chargement des films" . $e->getMessage();
}

$videos = [];

if ($view_all_vid->rowCount() > 0) {

    foreach ($view_all_vid->fetchAll(PDO::FETCH_ASSOC) as $movie_infos) {
        $video = new Video(
            (int) $movie_infos['vid_id'],
            $movie_infos['vid_name'],
            $movie_infos['vid_description'],
            $movie_infos['vid_gender'],
            $movie_infos['vid_release_date'],
            (int) $movie_infos['vid_cover']
        );
        $videos[] = $video;
    }
}
