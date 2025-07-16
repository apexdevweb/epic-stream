<?php
session_start();
if (!isset($_SESSION['adm_Auth']) && !isset($_SESSION['admin_data']['adm_name'])) {
    $_SESSION = [];
    session_unset();
    header('Location: ../../index.php');
    exit;
}
