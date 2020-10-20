<?php
    require ("model/session_start.php");

    $site_title = "Mes comptes";
    include ("view/template/doctype_html.php");
    include ("view/template/nav.php");
    include ("view/template/header.php");
    // include ("model/data/accounts.php");
?>

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
        INNER JOIN User
        ON account.user_id = user.id
        WHERE user_id = :user_id
        ");

        $query->execute([
            "user_id" => $_SESSION["user"]["id"]
        ]);
    $accounts = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<?php 
    require ("view/compteView.php");

    $script = "<script src='public/js/layer.js'></script>";

    include ("view/template/footer.php");
?>