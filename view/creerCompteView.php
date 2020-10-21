<?php 
    include ("view/template/doctype_html.php");
    include ("view/template/nav.php");
    include ("view/template/header.php");
?>

<main class="container">
    <form action="" method="post">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="account_type">Quel type de compte voulez-vous créer ?</label>
                <select class="form-control" name="account_type" id="account_type">
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
                <label for="account_number">Numéro de compte :</label>
                <input class="form-control" name="account_number" type="text" placeholder="0000XXX0000">
            </div>
            <div class="form-group col-md-6">
                <label for="amount">Montant à déposer :</label>
                <input class="form-control" name="amount" type="text" placeholder="50 euros minimum">
            </div>
            <div class="form-group col-md-6">
                <label for="opening_date">La date de création du compte</label>
                <input class="form-control" name="opening_date" type="text" placeholder="YYYY-MM-DD">
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block" name="fill_form">Confirmer la création d'un nouveau compte.</button>
       
        <!-- <div class = "verification">
        <h4>Votre nouveau compte : </h4>
   
        if (isset($_POST['email']) AND isset($_POST['name']) AND isset($_POST['last_name']) AND isset($_POST['street']) AND isset($_POST['city']) AND isset($_POST['code_postal']) AND isset($_POST['state']) AND isset($_POST['compte']) AND isset($_POST['montant']))
        {
            echo htmlspecialchars($_POST['email']) .'<br>'. htmlspecialchars($_POST['name']) .' '. htmlspecialchars($_POST['last_name']) .'<br>'.htmlspecialchars( $_POST['street']) .'<br>'. htmlspecialchars($_POST['code_postal']) .' '. htmlspecialchars($_POST['city']) .'<br>'. htmlspecialchars($_POST['state']) .'<br>'. 'Type de compte : ' . htmlspecialchars($_POST['compte']) .'<br>'. htmlspecialchars($_POST['montant']) . ' euros'.'<br>';
        }
        else // Il manque des paramètres, on avertit le visiteur
        {
            echo 'Vous devez renseigner toutes les données';
        }
        </div>  -->
    

        <p>Vous recevrez une confirmation de la création de votre compte par mail dans les 24h, après vérification des données envoyées.</p>

    </form>
  </main>

<?php 
    include ("view/template/footer.php");
?>