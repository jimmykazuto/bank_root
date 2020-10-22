<?php 
    require ("model/session_start.php");

    $site_title = "Virement";
    include ("view/template/doctype_html.php");
    include ("view/template/nav.php");
    include ("view/template/header.php");
?>

<main class="container">
    <form action="virement.php" method="post">

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="exampleFormControlSelect1">Compte à débiter</label>
                <select class="form-control" name="compte" id="exampleFormControlSelect1">
                    <option>Choisissez le de compte</option>
                    <option>Compte courant</option>
                    <option>Compte joint</option>
                    <option>Compte à terme</option>
                    <option>Livret A</option>
                    <option>Livret d'Épargne Logement</option>
                    <option>Plan d'Épargne Retraite</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleFormControlSelect1">Compte à créditer</label>
                <select class="form-control" name="compte" id="exampleFormControlSelect1">
                    <option>Choisissez le compte</option>
                    <option>Compte courant</option>
                    <option>Compte joint</option>
                    <option>Compte à terme</option>
                    <option>Livret A</option>
                    <option>Livret d'Épargne Logement</option>
                    <option>Plan d'Épargne Retraite</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputMontant">Montant à transférer</label>
                <input class="form-control" name="montant" type="number" step="1" id="amount" min="1" value="50">
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block" name="operation">Valider</button>

    </form>
</main>

<?php 
    include ("view/template/footer.php");
?>