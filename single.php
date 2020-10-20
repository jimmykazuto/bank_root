<?php 
  include "model/session_start.php";

    // if(isset($_GET["pos"]) AND ($_GET["pos"] > 0)) {
    //     $pos = htmlspecialchars($_GET["pos"]);
    //     $account = $accounts[$pos];
    // }

    try {
        $db = new PDO('mysql:host=localhost;dbname=banque_php', 'banquePHP', 'banquePHP');
    } catch (PDOExeption $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    $query = $db->prepare(
        "SELECT *
        FROM Operation
        LEFT JOIN Account ON operation.account_id = account.id
        LEFT JOIN User ON account.user_id = user.id
        WHERE account.user_id = :user_id
    ");
    // var_dump($query);

    $query->execute ([
        "user_id" => $_SESSION["user"]["id"]
    ]);
    // var_dump($query);
    $account = $query->fetchAll(PDO::FETCH_ASSOC);
    var_dump($account);
?>

<?php 
    require ("view/singleView.php");
?>