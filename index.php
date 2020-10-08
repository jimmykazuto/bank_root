<?php
$site_title = "Bank-Root";
include "template/doctype_html.php";
include "template/nav.php";
include "template/header.php";
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
        <a href="creerCompte.php"><button type="button" class="btn btn-primary">Créer un compte</button></a>
    </section>
</section>


<?php $script = "<script src='public/js/layer.js'></script>"; ?>

<?php
include "template/footer.php";
?>