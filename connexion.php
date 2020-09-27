<?php 
    $site_title = "Connexion";
    include ("template/nav.php");
    include ("template/header.php");
?>

<main class="container">
    <h4>Vous connecter : </h4>

    <!-- Sécurité pour empêcher un utilisateur malveillant d'hacker l'URL -->
    <form action="connexion.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

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
                if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ===  "lol")
                {
                    echo "Bienvenue sur notre site";
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