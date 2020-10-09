<?php
    require "template/session_start.php"
?>

<?php
$site_title = "Mes comptes";
include "template/doctype_html.php";
include "template/nav.php";
include "template/header.php";
include "data/accounts.php";
?>

<?php 
  try {
        $db = new PDO('mysql:host=localhost;dbname=banque_php', 'banquePHP', 'banquePHP');
    } catch (PDOExeption $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

// condition avec $_SESSION (appel en bdd id utilisateur)

    $account_banquephp = $db->query(
        "SELECT *
        FROM Account 
        LEFT JOIN User 
        ON account.user_id = user.id
        ");

    $accounts = $account_banquephp->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($accounts);

?>

<h2>Vos comptes</h2>
<div class="row">
<?php
foreach ($accounts as $key => $accounts) :
?>

<div class="col-12 col-sm-10 col-md-6 col-lg-4 mb-5">
    <div class="card text-center">
        <section class="card-body">
            <h5 class="card-title"><?php echo $accounts["account_type"];?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $accounts["account_number"];?></h6>
            <hr>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $accounts["lastname"] ." ". $accounts["firstname"];?></li>
            </ul>
            <a href="depot-retrait.php" class="btn btn-primary">Dépot/Retrait</a>
            <a href="virement.php" class="btn btn-primary">Virement</a>
            <a href="supprimer.php" class="btn btn-primary">Cloturer</a>
            <a href="single.php?pos=<?php echo $key; ?>">Voir le compte</a>
        </section>
    </div> 
</div>
<?php 
endforeach;
?>
</div>

<?php $script = "<script src='public/js/layer.js'></script>"; ?>

<?php
include "template/footer.php";
?>