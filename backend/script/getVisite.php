<?php
require_once "backend/connection/Db_connection.php";
$visits = [];
$monthlyCounts = array_fill(1, 12, 0);

try {
    $rescu_vst = $bdd->prepare("SELECT date_vst FROM visites");
    $rescu_vst->execute();

    foreach ($rescu_vst as $vst) {
        $date = $vst['date_vst'];
        $visits[] = $date;
        $month = (int)date('n', strtotime($date));
        $monthlyCounts[$month]++;
    }
} catch (PDOException $e) {
    echo "Erreur de sélection des visites : " . $e->getMessage();
}
