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
// if(isset($_SESSION["user"]) {

  try {
        $db = new PDO('mysql:host=localhost;dbname=banque_php', 'banquePHP', 'banquePHP');
    } catch (PDOExeption $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

// condition avec $_SESSION (appel en bdd id utilisateur)<!-- $_SESSION["user"] = $user; -->
// if ($user["id"] = $_SESSION["user"]["id"]) {
    // if ($_SESSION["user"] = $user){
    $query = $db->prepare(
        "SELECT *
        -- SELECT a.id AS a_id, a.account_tye, a.account_number, u.firstname
        FROM Account 
        INNER JOIN User
        ON account.user_id = user.id
        WHERE user_id = :user_id
        ");

        $query->execute([
            "user_id" => $_SESSION["user"]["id"]
        ]);
    $accounts = $query->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($accounts);
// }
// else {
//     echo "bordayl";
// }
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