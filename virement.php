<?php
    require "model/session_start.php";
?>

<?php 
    $site_title = "Virement";
    include ("view/template/doctype_html.php");
    include ("view/template/nav.php");
    include ("view/template/header.php");
?>

<main class="container">
    <form action="virement.php" method="post">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Quel type de compte voulez-vous débiter ?</label>
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
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Quel type de compte voulez-vous créditer ?</label>
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
        </div>
        <div class="form-group">
                <label for="inputMontant">Montant à transférer</label>
                <input class="form-control" name="montant" type="text" placeholder="50 euros minimum">
            </div>

        <button type="submit" class="btn btn-primary">Valider</button>

    </form>
  </main>

<?php 
    include ("view/template/footer.php");
?>