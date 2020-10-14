<?php 
    $site_title = "Mon compte";
    include ("view/template/doctype_html.php");
    include ("view/template/nav.php");
    include ("view/template/header.php");
    require ("model/data/accounts.php");
    if(isset($_GET["pos"])) {
        $pos = htmlspecialchars($_GET["pos"]);
        $account = $accounts[$pos];
    }
?>

<?php 
  try {
        $db = new PDO('mysql:host=localhost;dbname=banque_php', 'banquePHP', 'banquePHP');
    } catch (PDOExeption $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    // if (empty($_GET) || !isset($_GET["id"])) {
    //     header("Location: http://127.0.0.1/bank_root/inscription.php");
    //   }

    //   $id = ($_GET["id"];

    $query = $db->prepare(
        "SELECT *
        FROM Account 
        LEFT JOIN Operation 
        ON id = account_id
        WHERE id = :id
        ");

    $query -> execute ([
        "id" => $id
    ]);
    $account = $query->fetchAll(PDO::FETCH_ASSOC);
    var_dump($account);
?>

<?php 
    require "view/singleView.php";
?>

<?php 
    include ("view/template/footer.php");
?>