<?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ===  "lol")
    {
        header("Location: index.php");
        exit();
    }
    $site_title = "Connexion";
    include ("template/nav.php");
    include ("template/header.php");
?>

<main class="container">
    <h4>Vous connecter : </h4>

    <!-- Sécurité pour empêcher un utilisateur malveillant d'hacker l'URL -->
    <form action="connexion.php" method="post" action="">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Mot de passe</label>
                <input type="password" name="mot_de_passe" class="form-control" id="inputPassword4">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Valider</button>

        <div class = "connexion">
            <?php
                if (empty($_POST['mot_de_passe'])) {
                    echo "rentrez votre adresse mail et votre mot de passe";
                }
                else {
                    echo "mot de passe erroné";
                }
            ?>
        </div>

    </form>
</main>

<?php 
    include ("template/footer.php");
?>