<?php
require_once "backend/connection/Db_connection.php";

if (isset($_SERVER['REMOTE_ADDR'])) {
    $ip_visit = htmlspecialchars($_SERVER['REMOTE_ADDR']);

    if ($ip_visit != null) {
        try {
            $insert_ip = $bdd->prepare("INSERT INTO visites (adresse_vst) VALUE (?)");
            $insert_ip->execute([$ip_visit]);
        } catch (PDOException $e) {
            echo "Erreur d'insertion de l'adresse ip" . $e->getMessage();
        }
    }
} else {
    $ip_visit = 'Adresse IP non disponible';
}
