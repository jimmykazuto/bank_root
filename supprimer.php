<?php
    require ("model/session_start.php");

    if(isset($_GET["id"]) AND ($_GET["id"] > 0)) {
    $posDeleteAccount = htmlspecialchars($_GET["id"]);

    require ("view/supprimerView.php");