<?php 
    $site_title = "Bank-Root";
    include ("view/template/doctype_html.php");
    include ("view/template/nav.php");
    include ("view/template/header.php");
?>

<article class="container">
    <section>
        <h4>Vous connecter</h4>
        <a href="connexion.php"><button type="button" class="btn btn-primary">Se connecter</button></a>

    </section>
    <hr>
    <section>
        <h4>Vous n'êtes pas encore inscrit chez nous :</h4>
        <p>Cliquez sur ce lien, il vous redirigera vers notre formulaire d'inscription</p>
        <a href="inscription.php"><button type="button" class="btn btn-primary">S'inscrire</button></a>
    </section>
</section>

<?php 
    $script = "<script src='public/js/layer.js'></script>";
    include "view/template/footer.php";
?>