<?php

    try {
        $db = new PDO('mysql:host=localhost;dbname=banque_php', 'banquePHP', 'banquePHP');
    } catch (PDOExeption $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    // $query = $db->prepare(
        // "DELETE
        // FROM Account
        // WHERE 'account' = $_SESSION($user["id"])
    // ");

    $query->execute ([]);

    $supprimerCompte = $query->fetch(PDO::FETCH_ASSOC);

    return $supprimerCompte;