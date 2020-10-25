
<?php 
  try {
        $db = new PDO('mysql:host=localhost;dbname=banque_php', 'banquePHP', 'banquePHP');
    } catch (PDOExeption $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    $query = $db->prepare(
        "SELECT *
        FROM Account 
        WHERE user_id = :user_id
        ");

        $query->execute([
            "user_id" => $_SESSION["user"]["id"]
        ]);
    $accounts = $query->fetchAll(PDO::FETCH_ASSOC);
?>