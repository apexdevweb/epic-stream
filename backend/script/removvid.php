<?php
require_once "../connection/Db_connection.php";

if (isset($_GET['id'])) {
    $vid_id = $_GET['id'];
    try {
        $del_vid = $bdd->prepare("DELETE FROM `film` WHERE vid_id = ?");
        $del_vid->execute([$vid_id]);
        header("Location: ../../administration.php");
        exit;
    } catch (PDOException $e) {
        echo "Erreur de suppression de la video" . $e->getMessage();
    }
}
