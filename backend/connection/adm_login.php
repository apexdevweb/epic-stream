<?php
require_once "Db_connection.php";
require "backend/class/Admin.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["log_admin"])) {
        if (!empty($_POST["adm_name"]) && !empty($_POST["adm_pass"]) && !empty($_POST["cfrm_pass"])) {

            $administrator_name = htmlspecialchars(strip_tags($_POST["adm_name"]));
            $administrator_pass = htmlspecialchars(strip_tags($_POST["adm_pass"]));
            $confirme_pass = htmlspecialchars(strip_tags($_POST["cfrm_pass"]));

            if ($administrator_pass === $confirme_pass) {

                // vérifie si l'agence existe
                $data_admin_verif = $bdd->prepare("SELECT * FROM administrateur WHERE adm_name = ?");
                $data_admin_verif->execute([$administrator_name]);

                if ($data_admin_verif->rowCount() > 0) {

                    // on vérifie si les mot de passe rentrer par l'agence correspond avec ceux de la database
                    $admin_infos = $data_admin_verif->fetch();
                    $pass_admin_db = $admin_infos['adm_pass'];
                    if (password_verify($administrator_pass, $pass_admin_db)) {

                        $my_admin = new Admin(
                            $admin_infos['adm_id'],
                            $admin_infos['adm_name'],
                        );
                        $_SESSION["adm_Auth"] = true;
                        $_SESSION['admin_data'] = [
                            "adm_id" => $my_admin->getAdminId(),
                            "adm_name" => $my_admin->getAdminName(),
                        ];

                        header("Location: administration.php");
                        exit;
                    }
                }
            }
        }
    }
}
