<?php 
    $site_title = "Créer un compte";
    include ("template/nav.php");
    include ("template/header.php");
?>



<main class="container">
    <form action="creerCompte.php" method="post">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Mot de passe</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Nom</label>
                <input type="text" name="name" class="form-control" id="inputName" placeholder="Nom">
            </div>
            <div class="form-group col-md-6">
                <label for="inputLastName">Prénoms</label>
                <input type="text" name="last_name" class="form-control" id="inputLastName" placeholder="Prénoms">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Adresse</label>
                <input type="text" name="street" class="form-control" id="inputAddress" placeholder="numéro, rue">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Ville</label>
                <input type="text" name="city" class="form-control" id="inputCity" placeholder="Ville">
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCP">Code postal</label>
                <input type="text" name="code_postal" class="form-control" id="inputCP">
            </div>
            <div class="form-group col-md-6">
                <label for="inputState">Pays</label>
                <select id="inputState" name="state" class="form-control">
                    <option selected>Sélectionner votre pays de résidence</option>
                    <option>France</option>
                    <option>Royaume-Uni</option>
                    <option>Allemagne</option>
                    <option>Suisse</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Quel type de compte voulez-vous créer ?</label>
                <select class="form-control" name="compte" id="exampleFormControlSelect1">
                    <option>Choisissez le type de compte à ouvrir</option>
                    <option>Compte courant</option>
                    <option>Compte joint</option>
                    <option>Compte à terme</option>
                    <option>Livret A</option>
                    <option>Livret d'Épargne Logement</option>
                    <option>Plan d'Épargne Retraite</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputMontant">Montant à déposer sur votre nouveau compte</label>
                <input class="form-control" name="montant" type="text" placeholder="50 euros minimum">
            </div>
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Je valide avoir pris connaissance des conditions d'utilisations
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>

        <div class = "verification">
            <h4>Votre nouveau compte : </h4>
            <?php
                if (isset($_POST['email']) AND isset($_POST['name']) AND isset($_POST['last_name']) AND isset($_POST['street']) AND isset($_POST['city']) AND isset($_POST['code_postal']) AND isset($_POST['state']) AND isset($_POST['compte']) AND isset($_POST['montant']))
                {
                    echo $_POST['email'] .'<br>'. $_POST['name'] .' '. $_POST['last_name'] .'<br>'. $_POST['street'] .'<br>'. $_POST['code_postal'] .' '. $_POST['city'] .'<br>'. $_POST['state'] .'<br>'. 'Type de compte : ' . $_POST['compte'] .'<br>'. $_POST['montant'] . ' euros'.'<br>';
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