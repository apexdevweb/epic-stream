<?php
session_start();
require_once "backend/connection/Db_connection.php";
require "backend/class/Admin.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["log_admin"])) {
        if (!empty($_POST["adm_name"]) && !empty($_POST["adm_pass"])) {

            $administrator_name = htmlspecialchars(strip_tags($_POST["adm_name"]));
            $administrator_pass = htmlspecialchars(strip_tags($_POST["adm_pass"]));

            try {
                $data_admin_verif = $bdd->prepare("SELECT * FROM administrateur WHERE adm_name = ?");
                $data_admin_verif->execute([$administrator_name]);
            } catch (PDOException $e) {
                echo "Erreur de vérification de l'administrateur" . $e->getMessage();
            }

            if ($data_admin_verif->rowCount() > 0) {

                $admin_infos = $data_admin_verif->fetch();
                $pass_admin_db = $admin_infos['adm_pass'];

                if ($administrator_pass === $pass_admin_db) {

                    $my_admin = new Admin(
                        $admin_infos['adm_id'],
                        $admin_infos['adm_name']
                    );
                    $_SESSION["adm_Auth"] = true;
                    $_SESSION["admin_data"] = [
                        "adm_id" => $my_admin->getAdminId(),
                        "adm_name" => $my_admin->getAdminName()
                    ];

                    header("Location: administration.php");
                    exit;
                }
            }
        }
    }
}
