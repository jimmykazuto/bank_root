<?php
$site_title = "Bank-Root";
include "template/nav.php";
include "template/header.php";
include "data/accounts.php";
?>

<h2>Vos comptes</h2>
<div class="row">
<?php
foreach ($accounts as $key => $account) :
?>
<div class="col-12 col-sm-10 col-md-6 col-lg-4">
    <div class="card text-center">
        <section class="card-body">
            <h5 class="card-title"><?php echo $account["name"];?></h5>
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
            <a href="compte.php?pos=<?php echo $key; ?>">Voir le compte</a>

        </section>
    </div> 
</div>
<?php 
endforeach;
?>
</div>

<?php $script = "<script src='js/layer.js'></script>"; ?>

<?php
include "template/footer.php";
?>