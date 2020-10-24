<?php

    function getOperationOnSingleAccount(array $db, int $id) {
        try {
            $db = new PDO('mysql:host=localhost;dbname=banque_php', 'banquePHP', 'banquePHP');
        } catch (PDOExeption $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }

        $query = $db->prepare(
            "SELECT *
            FROM Operation
            WHERE Operation.account_id = :account_id
            AND Operation.id = :id"
        );

        $query->execute([
            // "user_id" => $user["id"],
            "account_id" => $account["id"],
            "id" => $id,
        ]);
        $operation = $query->fetchAll(PDO::FETCH_ASSOC);
        return $operation;
    }