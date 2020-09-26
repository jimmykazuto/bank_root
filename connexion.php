<?php 
    $site_title = "Connexion";
    include ("template/nav.php");
    include ("template/header.php");
?>

<main class="container">
    <h4>Vous connecter : </h4>

    <form action="connexion.php" method="post">

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
                $email = "kaput@hotmail.fr";
                $mot_de_passe = "lol";
                if($email === $_POST['email'] ) {
                    echo "Bienvenue sur notre site";
                }
                else {
                    echo "Adresse mail ou mot de passe erroné";
                }
            ?>
        </div>

    </form>
</main>

<?php 
    include ("template/footer.php");
?>