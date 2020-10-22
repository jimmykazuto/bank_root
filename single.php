<?php 
  include ("model/session_start.php");
  include ("model/singleModel.php");
  include ("model/entity/singleAccount.php");

//   4 vérifier l'affichage de la requête en passant d'un tableau multidimentionnel à un tableau associatif
// 7 appel de la function
    if(isset($_GET["id"]) AND ($_GET["id"] > 0)) {
        $pos = htmlspecialchars($_GET["id"]);
        $account = getSingleAccount($_SESSION["user"], $pos);

    }

    require ("view/singleView.php");
