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

    require ("view/connexionView.php");

?>