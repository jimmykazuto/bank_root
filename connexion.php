<!-- Se connecter à la BDD -->
<?php 
    try {
        $db = new PDO('mysql:host=localhost;dbname=banque_php', 'banquePHP', 'banquePHP');
    } catch (PDOExeption $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    // si le bouton submit est cliqué
    if(!empty($_POST) AND isset($_POST["valider"])) {
        //Requête pour sécurisé l'entrée utilisateur contre les injections
        $query = $db->prepare(
            "SELECT * FROM User
            WHERE email = :email"
        );
        $query->execute([
            "email" => $_POST["email"]
        ]);
    
        // Extraire les informations de la requête
        $user = $query->fetch(PDO::FETCH_ASSOC);
        // var_dump($user);
        // si un utilisateur a été trouvé
        if($user) {
            // si le mdp est le bon
            if(password_verify($_POST["password"], $user["password"])) {
                // echo "OK";
                // Démarrer une session
                session_start();
                // var_dump($_SESSION);
                $_SESSION["user"] = $user;
                // var_dump($_SESSION);
                header("Location: http://127.0.0.1/bank_root/compte.php");
            }
            else {
                echo '<center><font color="red"><b>Identifiant ou mot de passe incorrect</center></font><br />';
            }
        }
    }
?>

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
    <hr>
    <section>
        <h4>Vous n'êtes pas encore inscrit chez nous :</h4>
        <p>Cliquez sur ce lien, il vous redirigera vers </p>
        <a href="creerCompte.php"><button type="button" class="btn btn-primary">Créer un compte</button></a>
    </section>
</main>

<?php 
    include ("view/template/footer.php");
?>