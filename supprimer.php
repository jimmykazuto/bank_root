<?php
    require ("model/session_start.php");
 
    $site_title = "Supprimer compte";
    include ("view/template/doctype_html.php");
    include ("view/template/nav.php");
    include ("view/template/header.php");
    require ("view/supprimerView.php");

    include ("view/template/footer.php");