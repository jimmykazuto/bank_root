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

    $table_banquephp = $db->query("SELECT * FROM user");
    // var_dump($table_banquephp);
    // echo "user";
    $users = $table_banquephp->fetchAll(PDO::FETCH_ASSOC);
    var_dump($users);
    foreach ($users as $key => $users) {
        // echo "<p>" . var_dump($users) . "</p>";
    echo  "<div class='alert alert-danger col-md-1 role='alert'>" . htmlspecialchars($users["firstname"]) . "</div>" . "<div class='alert alert-primary col-md-11' role='alert'>" . htmlspecialchars($users["lastname"]) . "</div>" . "</div>";
    }
?>

<h2>Vos comptes</h2>
<div class="row">
<?php
foreach ($accounts as $key => $account) :
?>

<div class="col-12 col-sm-10 col-md-6 col-lg-4">
    <div class="card text-center">
        <section class="card-body">
            <h5 class="card-title"><?php echo $users["lastname"];?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $account["number"];?></h6>
            <hr>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $account["owner"];?></li>
                <li class="list-group-item"><?php echo $account["amount"];?></li>
                <li class="list-group-item"><?php echo $account["last_operation"];?></li>
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