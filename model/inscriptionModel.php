<?php

function newUser($user) {
    try {
        $db = new PDO('mysql:host=localhost;dbname=banque_php', 'banquePHP', 'banquePHP');
    } catch (PDOExeption $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    // var_dump($_POST);
    $query = $db->prepare(
        "INSERT INTO user(firstname, lastname, birth_date, email, password, country, adress, postal_code, city)
        VALUES(:firstname, :lastname, :birth_date, :email, :password, :country, :adress, :postal_code, :city)"
    );
    $result = $query->execute([
        "firstname" => $user->getFirstname(),
        "lastname" => $user->getLastname(),
        "birth_date" => $user->getBirth_date(),
        "email" => $user->getEmail(),
        "password" => $user->getPassword(),
        "country" => $user->getCountry(),
        "adress" => $user->getAdress(),
        "postal_code" => $user->getPostal_code(),
        "city" => $user->getCity()
    ]);
}
