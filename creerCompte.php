<?php
    require "template/session_start.php"
?>

<?php 
    $site_title = "Créer un compte";
    include ("template/doctype_html.php");
    include ("template/nav.php");
    include ("template/header.php");
?>

<?php 
    try {
        $db = new PDO('mysql:host=localhost;dbname=banque_php', 'banquePHP', 'banquePHP');
    } catch (PDOExeption $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    // condition & récupérer les données utilisateur du form
    if(!empty ($_POST) AND isset($_POST["fill_form"])) {
        // var_dump($_POST);
        $query = $db->prepare(
            "INSERT INTO account(account_type, account_number, amount, opening_date, user_id)
            VALUES(:account_type, :account_number, :amount, :opening_date, :user_id)"
        );
        $result = $query->execute([
            "account_type" => $_POST["account_type"],
            "account_number" => $_POST["account_number"],
            "amount" => $_POST["amount"],
            "opening_date" => $_POST["opening_date"],
            "user_id" => $_POST["user_id"]
        ]);
    }

?>

<main class="container">
    <form action="creerCompte.php" method="post">

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
                <label for="account_number">Votre numéro de compte</label>
                <input class="form-control" name="account_number" type="text" placeholder="0000XXX0000">
            </div>
            <div class="form-group col-md-6">
                <label for="amount">Montant à déposer sur votre nouveau compte</label>
                <input class="form-control" name="amount" type="text" placeholder="50 euros minimum">
            </div>
            <div class="form-group col-md-6">
                <label for="opening_date">La date de création du compte</label>
                <input class="form-control" name="opening_date" type="text" placeholder="YYYY-MM-DD">
            </div>
            <div class="form-group col-md-6">
                <label for="user_id">user_id</label>
                <input class="form-control" name="user_id" type="text" placeholder="0">
            </div>
        </div>

        <!-- <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Je confirme avoir pris connaissance des conditions d'utilisations
                </label>
            </div>
        </div> -->
        <button type="submit" class="btn btn-primary" name="fill_form">Valider</button>

        <!-- <div class = "verification">
            <h4>Votre nouveau compte : </h4>
            <?php
                // if (isset($_POST['email']) AND isset($_POST['name']) AND isset($_POST['last_name']) AND isset($_POST['street']) AND isset($_POST['city']) AND isset($_POST['code_postal']) AND isset($_POST['state']) AND isset($_POST['compte']) AND isset($_POST['montant']))
                // {
                    // echo htmlspecialchars($_POST['email']) .'<br>'. htmlspecialchars($_POST['name']) .' '. htmlspecialchars($_POST['last_name']) .'<br>'.htmlspecialchars( $_POST['street']) .'<br>'. htmlspecialchars($_POST['code_postal']) .' '. htmlspecialchars($_POST['city']) .'<br>'. htmlspecialchars($_POST['state']) .'<br>'. 'Type de compte : ' . htmlspecialchars($_POST['compte']) .'<br>'. htmlspecialchars($_POST['montant']) . ' euros'.'<br>';
                // }
                // else // Il manque des paramètres, on avertit le visiteur
                // {
                    // echo 'Vous devez renseigner toutes les données';
                // }
            ?>
        </div> -->

        <p>Vous recevrez une confirmation de la création de votre compte par mail dans les 24h, après vérification des données envoyées.</p>

    </form>
  </main>

<?php 
    include ("template/footer.php");
?>