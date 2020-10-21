<?php 
    include ("view/template/doctype_html.php");
    include ("view/template/nav.php");
    include ("view/template/header.php");
?>

<main class="container">
    <form action="" method="post">
        <h2>S'inscrire</h2>
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="firstname">Votre nom</label>
                <input class="form-control" name="firstname" type="text" >
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
                <label for="password">Confirmer votre mot de passe</label>
                <input class="form-control" name="confirm_password" type="text">
            </div>
            <div class="form-group col-md-6">
                <label for="country">Pays :</label>
                <input class="form-control" name="country" type="text">
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

        <p>Vous recevrez une confirmation de la création de votre compte par mail dans les 24h, après vérification des données envoyées.</p>

    </form>
</main>

<?php 
    include ("view/template/footer.php");
?>