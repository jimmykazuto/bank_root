<?php 

// 6 création de la function
function getSingleAccount(array $user, int $id) {
    try {
        $db = new PDO('mysql:host=localhost;dbname=banque_php', 'banquePHP', 'banquePHP');
    } catch (PDOExeption $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

// 1 faire la requête
    $query = $db->prepare(
        "SELECT *
        FROM Account
        -- LEFT JOIN Operation ON operation.account_id = Account.id
        WHERE Account.user_id = :user_id
        AND Account.id = :id
    ");

// 2 exécuter la requête  5
    $query->execute ([
        "user_id" => $user["id"],
        "id" => $id
    ]);
    $account = $query->fetch(PDO::FETCH_ASSOC);
// 3 Vérifier que la requête est bien éxécutée
    return $account;
}