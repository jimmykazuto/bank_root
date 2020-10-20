<?php 
    include ("view/template/doctype_html.php");
    include ("view/template/nav.php");
    include ("view/template/header.php");
?>

<main class="container">
    <h4>Vous connecter : </h4>

    <!-- Sécurité pour empêcher un utilisateur malveillant d'hacker l'URL -->
    <form action="" method="POST">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="form-group col-md-6">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
        </div>

        <button type="submit" name="valider" class="btn btn-primary">Valider</button>

    </form>
</main>

<?php 
    include ("view/template/footer.php");
?>