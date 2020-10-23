<?php
    // include ("model/session_start.php");
    include ("model/creerCompteModel.php");
    include ("model/entity/account.php");

    $site_title = "Créer un compte";

    if(!empty ($_POST) AND isset($_POST["fill_form"])) {
        $account = new Account($_POST);
        newAccount($account);
        var_dump($account);
    }

    require ("view/creerCompteView.php");