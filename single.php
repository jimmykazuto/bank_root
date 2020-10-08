

<?php 
    $site_title = "Mon compte";
    include ("template/doctype_html.php");
    include ("template/nav.php");
    include ("template/header.php");
    require ("data/accounts.php");
    if(isset($_GET["pos"])) {
        $pos = htmlspecialchars($_GET["pos"]);
        $account = $accounts[$pos];
    }
?>

<h2>Vous consultez le compte :</h2>

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
            <a href="depot-retrait.html" class="btn btn-primary">Dépot / Retrait</a>
            <a href="transfert.html" class="btn btn-primary">Transfert</a>
            <a href="supprimer.html" class="btn btn-primary">Cloturer</a>
        </section>
    </div> 
</div>

<a href="index.php">Retourner sur vos comptes</a>

<?php 
    include ("template/footer.php");
?>