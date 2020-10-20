<?php 
    $site_title = "Dépot / Retrait";
    include ("view/template/doctype_html.php");
    include ("view/template/nav.php");
    include ("view/template/header.php");
?>

<h2>Réaliser une opération</h2>
<form class="mt-5 fullForm" method="post" action="">
    <div class="form-group">
        <label for="account_id">Choisissez votre compte</label>
        <select class="form-control" id="account_id" name="account_id">
        </select>
    </div>
    <div class="form-group">
        <label for="operation">Type d'opération</label>
        <select class="form-control" id="operation" name="operation_type">
        <option value="crédit">Dépot</option>
        <option value="débit">Retrait</option>
        </select>
    </div>
    <div class="form-group">
        <label for="amount">Montant en euros</label>
        <input type="number" step="0.01" name="amount" id="amount" min="1" value="1">
    </div>
    <div class="text-center">
        <button type="submit" value="operation" name="operation" class="btn btn-info">Exécuter</button>
    </div>
</form>

<?php 
    include ("view/template/footer.php");
?>