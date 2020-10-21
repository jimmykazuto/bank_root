<?php
    include ("model/session_start.php");
    include ("model/creerCompteModel.php");
    include ("model/entity/account.php");

    $site_title = "Créer un compte";

    if(!empty ($_POST) AND isset($_POST["fill_form"])) {
        $account = new Account($_POST);
        var_dump($account);
        newAccount($account);
    }

    require ("view/creerCompteView.php");