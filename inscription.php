<?php 
    $site_title = "Créer un compte";
    include ("template/doctype_html.php");
    include ("template/nav.php");
    include ("template/header.php");
?>

<main class="container">
    <form action="creerCompte.php" method="post">
        <h2>S'inscrire</h2>
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="firstname">Votre nom</label>
                <input class="form-control" name="name" type="text" >
            </div>
            <div class="form-group col-md-6">
                <label for="lastname">Votre prénom</label>
                <input class="form-control" name="lastname" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="birth_date">Votre date de naissance</label>
                <input class="form-control" name="birth_date" type="text" placeholder="YYYY-MM-DD">
            </div>
            <div class="form-group col-md-6">
                <label for="email">Votre adresse mail</label>
                <input class="form-control" name="email" type="text" placeholder="xxxx@xxx.xx">
            </div>
            <div class="form-group col-md-6">
                <label for="password">Votre mot de passe</label>
                <input class="form-control" name="password" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="country">Pays :</label>
                <input class="form-control" name="pays" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="adress">Votre adresse :</label>
                <input class="form-control" name="adress" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="postal_code">Code postal :</label>
                <input class="form-control" name="postal_code" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="city">Ville :</label>
                <input class="form-control" name="city" type="text">
            </div>
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Je confirme avoir pris connaissance des conditions d'utilisations
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="fill_form">Valider</button>

        <div class = "verification">
            <h4>Votre nouveau compte : </h4>
            <?php
                if (isset($_POST['email']) AND isset($_POST['name']) AND isset($_POST['last_name']) AND isset($_POST['street']) AND isset($_POST['city']) AND isset($_POST['code_postal']) AND isset($_POST['state']) AND isset($_POST['compte']) AND isset($_POST['montant']))
                // $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
                {
                    echo htmlspecialchars($_POST['email']) .'<br>'. htmlspecialchars($_POST['name']) .' '. htmlspecialchars($_POST['last_name']) .'<br>'.htmlspecialchars( $_POST['street']) .'<br>'. htmlspecialchars($_POST['code_postal']) .' '. htmlspecialchars($_POST['city']) .'<br>'. htmlspecialchars($_POST['state']) .'<br>'. 'Type de compte : ' . htmlspecialchars($_POST['compte']) .'<br>'. htmlspecialchars($_POST['montant']) . ' euros'.'<br>';
                }
                else // Il manque des paramètres, on avertit le visiteur
                {
                    echo 'Vous devez renseigner toutes les données';
                }
            ?>
        </div>

        <p>Vous recevrez une confirmation de la création de votre compte par mail dans les 24h, après vérification des données envoyées.</p>

    </form>
  </main>

<?php 
    include ("template/footer.php");
?>