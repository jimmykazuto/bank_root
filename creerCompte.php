<?php

    require ("view/creerCompteView.php");

    try {
        $db = new PDO('mysql:host=localhost;dbname=banque_php', 'banquePHP', 'banquePHP');
    } catch (PDOExeption $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    // condition & récupérer les données utilisateur du form
    if(!empty ($_POST) AND isset($_POST["fill_form"])) {
        // var_dump($_POST);
        $query = $db->prepare(
            "INSERT INTO account(account_type, account_number, amount, opening_date, user_id)
            VALUES(:account_type, :account_number, :amount, :opening_date, :user_id)"
        );
        $result = $query->execute([
            "account_type" => $_POST["account_type"],
            "account_number" => $_POST["account_number"],
            "amount" => $_POST["amount"],
            "opening_date" => $_POST["opening_date"],
            "user_id" => $_POST["user_id"]
        ]);
    }