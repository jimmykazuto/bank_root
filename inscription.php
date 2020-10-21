<?php 
    include ("model/inscriptionModel.php");
    include ("model/entity/user.php");

    $site_title = "S'inscrire";

    if(!empty ($_POST) AND isset($_POST["fill_form"])) {
        $user = new User($_POST);
        var_dump($user);
        // $user->hydrate($data);
        newUser($user);
        // var_dump($user);
    }

    require ("view/inscriptionView.php");