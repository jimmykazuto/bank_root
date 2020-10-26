<?php 
  include ("model/session_start.php");
  include ("model/singleModel.php");
  // include ("model/operationModel.php");
  include ("model/entity/singleAccount.php");

    if(isset($_GET["id"]) AND ($_GET["id"] > 0)) {
        $pos = htmlspecialchars($_GET["id"]);
        $account = getSingleAccount($_SESSION["user"], $pos);
    }

    require ("view/singleView.php");
