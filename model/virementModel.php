<?php

    try {
        $db = new PDO('mysql:host=localhost;dbname=banque_php', 'banquePHP', 'banquePHP');
    } catch (PDOExeption $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    $query = $db->prepare();

    $query->execute ([]);

    $ = $query->fetch(PDO::FETCH_ASSOC);

    return $;
// sélectionner table account
// selectionner table opération
// séletionner table user
// choisir compte à débiter
// retirer la somme de amout dans compte
// créer une opération avec la nouvelle somme
// choisir le compte à créditer
// ajouter le nouvel amout dans le compte
// créer une opération avec la nouvelle somme

