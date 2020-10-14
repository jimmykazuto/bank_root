<?php
    require "model/session_start.php";
?>

<?php 
    $site_title = "Supprimer compte";
    include ("view/template/doctype_html.php");
    include ("view/template/nav.php");
    include ("view/template/header.php");
?>

<main class="container">
    <form action="">
      <h3>Sélectionner le compte à cloturer</h3> 
        <select class="form-control form-control-lg">
          <option>Sélectionner le compte à cloturer</option>
          <option>Compte courant</option>
          <option>Compte joint</option>
          <option>Compte à terme</option>
          <option>Livret A</option>
          <option>Livret d'Épargne Logement</option>
          <option>Plan d'Épargne Retraite</option>
        </select>
      <button type="button" class="btn btn-primary btn-lg btn-block">Valider la fermuture du compte</button>

    </form>
  </main>

<?php 
    include ("view/template/footer.php");
?>